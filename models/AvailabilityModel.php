<?php

namespace App\Models;

use App\Core\Model;
use App\Validators\DateTimeValidator;
use App\Core\Field;
use App\Validators\JSONValidator;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;

class AvailabilityModel extends Model{


    
    protected function getFields(){
        return [
            'availability_id'=>new Field((new NumberValidator())->setIntegerLength(10), false),
            'user_id'=>new Field((new NumberValidator())->setIntegerLength(10)),
            'schedule'=>new Field((new JSONValidator())),
            'created_at'=>new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
        ];
    }

    public function getCaregiversAvailability(){

        $sql = "SELECT * FROM availability 
                LEFT JOIN user on user.user_id = availability.user_id
                LEFT JOIN clinic ON user.clinic_id = clinic.clinic_id
                WHERE user.role= 'caregiver';";
        
        $prep = $this->getConnection()->prepare($sql);
        $res = $prep->execute();

        $data = [];

        if($res){
            $data = $prep->fetchAll(\PDO::FETCH_OBJ);

           foreach($data as $value){
                $value->schedule = json_decode($value->schedule,true);
                $value->caregiver_data = json_decode($value->caregiver_data, true);
            }
        }

        return $data;

    }

    public function getCaregiverAvailability($id){

        $sql = "SELECT * FROM availability 
                LEFT JOIN user on user.user_id = availability.user_id
                WHERE user.role= 'caregiver' AND user.user_id=?";

        $prep = $this->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

        $data = [];

        if($res){
            $data = $prep->fetchAll(\PDO::FETCH_OBJ);

           foreach($data as $value){
                $value->schedule = json_decode($value->schedule,true);
                $value->caregiver_data = json_decode($value->caregiver_data, true);
            }
        }

        return $data;

    }



    public function getCaregiverData(string $title){

        $sql = "SELECT * FROM availability 
                LEFT JOIN user ON user.user_id = availability.user_id
                WHERE user.role = 'caregiver' 
                AND JSON_UNQUOTE(JSON_EXTRACT(caregiver_data, '$.title')) = ?;";
        
        $prep = $this->getConnection()->prepare($sql);
        $res = $prep->execute([$title]);

        $data = [];

        if($res){
            $data = $prep->fetchAll(\PDO::FETCH_OBJ);

           foreach($data as $value){
                $value->schedule = json_decode($value->schedule,true);
                $value->caregiver_data = json_decode($value->caregiver_data, true);
            }
        }

        return $data;

    }

   public function searchFlexible(string $query = '', string $place = '') {
    
    $sql = "SELECT * FROM availability 
            LEFT JOIN user ON user.user_id = availability.user_id
            LEFT JOIN clinic ON user.clinic_id = clinic.clinic_id
            WHERE user.role = 'caregiver'";

    $params = [];
    $conditions = [];

    if (!empty($query)) {
        $conditions[] = "(
            JSON_UNQUOTE(JSON_EXTRACT(caregiver_data, '$.title')) LIKE ?
            OR user.name LIKE ?
            OR user.surname LIKE ?
            OR clinic.clinic_name LIKE ?)";

        $searchTerm = '%' . $query . '%';
        $params[] = $searchTerm;
        $params[] = $searchTerm;
        $params[] = $searchTerm;
        $params[] = $searchTerm;
    }

    if (!empty($place)) {
        $conditions[] = "clinic.city LIKE ?";
        $params[] = '%' . $place . '%';
    }

    if (!empty($conditions)) {
        $sql .= " AND (" . implode(" AND ", $conditions) . ")";
    }

    $prep = $this->getConnection()->prepare($sql);
    $res = $prep->execute($params);

    $data = [];

    if ($res) {
        $data = $prep->fetchAll(\PDO::FETCH_OBJ);
        foreach ($data as $value) {
            $value->schedule = json_decode($value->schedule, true);
            $value->caregiver_data = json_decode($value->caregiver_data, true);
        }
    }

    return $data;
}




    public function editAvailability($id, $date, $time,$type) {
        $sql = "SELECT schedule 
                FROM availability 
                WHERE user_id=?";

        $prep = $this->getConnection()->prepare($sql);
        $prep->execute([$id]);
    
        $scheduleJson = $prep->fetchColumn(); 
        $schedule = json_decode($scheduleJson, true);
    
        foreach ($schedule['schedule'] as &$day) {
            if ($day['date'] === $date) {
                foreach ($day['times'] as &$slot) {
                    if ($slot['time'] === $time) {
                        $slot['status'] = $type;
                        break;
                    }
                }
                break;
            }
        }
    
        $updatedSchedule = json_encode($schedule);
    
        $sql = "UPDATE availability SET schedule = ? WHERE user_id = ?";
        $prep = $this->getConnection()->prepare($sql);

        return $prep->execute([$updatedSchedule, $id]);
    }


    public function updateAvailability($id,$array){

        $sql='SELECT schedule 
              FROM availability 
              WHERE user_id=?';

        $prep=$this->getConnection()->prepare($sql);
        $prep->execute([$id]);

        $scheduleJson = $prep->fetchColumn(); 
        $data = json_decode($scheduleJson, true);

        $data['schedule'] = array_merge($data['schedule'], $array);

        $updatedJson = json_encode($data, JSON_UNESCAPED_UNICODE);

        $sql2= "UPDATE availability SET schedule = ? WHERE user_id =?";
        $prep = $this->getConnection()->prepare($sql2);
        
        return $prep->execute([$updatedJson, $id]);

    }




    

}
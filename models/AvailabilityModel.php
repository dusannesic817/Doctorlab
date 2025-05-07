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



    public function editAvailability($id, $date, $time) {
        $sql = "SELECT schedule FROM availability WHERE user_id=?";
        $prep = $this->getConnection()->prepare($sql);
        $prep->execute([$id]);
    
        $scheduleJson = $prep->fetchColumn(); 
        $schedule = json_decode($scheduleJson, true);
    
        foreach ($schedule['schedule'] as &$day) {
            if ($day['date'] === $date) {
                foreach ($day['times'] as &$slot) {
                    if ($slot['time'] === $time) {
                        $slot['status'] = 'busy';
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
        $sql='SELECT schedule FROM availability WHERE user_id=?';
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
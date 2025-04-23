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


    public function editAvailabilty(int $id, array $data){

        $editList = [];
        $values=[];

        foreach($data as $key => $value){
            $editList[]="{$key}=?";
            $values[]=$value;
        }

        $editList = implode(', ', $editList);

        $values[]=$id;

        $sql = "UPDATE availability SET ";
        $prep = $this->getConnection()->prepare($sql);
        return $prep -> execute($values);
    }


    /*RESENJE
$scheduleJson = '[{"date":"April 1 Tuesday","times":[{"time":"08:00","status":"free"},{"time":"12:00","status":"free"}]}]'; ucitam raspored iz baze

$schedule = json_decode($scheduleJson, true);

// Tražimo dan i vreme koje želimo da menjamo
foreach ($schedule as &$day) {
    if ($day['date'] === 'April 1 Tuesday') {
        foreach ($day['times'] as &$timeSlot) {
            if ($timeSlot['time'] === '12:00') {
                $timeSlot['status'] = 'busy';
            }
        }
    }
}

$newScheduleJson = json_encode($schedule);

// Sad ažuriraj u bazi:
$userId = 5;
$sql = "UPDATE availability SET schedule = ? WHERE user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$newScheduleJson, $userId]);
*/
}
<?php


namespace App\Models;
use App\Core\Model;
use App\Core\Field;
use App\Validators\StringValidator;
use App\Validators\DateTimeValidator;
use App\Validators\NumberValidator;

class AppointmentModel extends Model{

    protected function getFields(){
        return [
            'appointment_id'=>new Field((new NumberValidator())->setIntegerLength(10), false),
            'user_id'=>new Field((new NumberValidator())->setIntegerLength(10)),
            'provider_id'=>new Field((new NumberValidator())->setIntegerLength(10)),
            'caregiver_data'=>new Field((new StringValidator())->setMaxLength(100)),
            'appointment_date'=>new Field((new DateTimeValidator())->allowDate() ),
            'start_time'=>new Field((new DateTimeValidator())->allowTime()),
            'status'=>new Field((new StringValidator())->setMaxLength(20)),
            'created_at'=>new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
            'updated_at'=>new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
            
        ];
    }


    public function getSchedule($id){

        $sql='SELECT 
                appointment.*,
                u1.name AS patient_name,
                u2.name AS doctor_name,
                u2.surname AS doctor_surname,
                 u2.profile_photo as photo,
                u2.caregiver_data as doctor,
                c.*
            FROM appointment 
            LEFT JOIN user AS u1 ON appointment.user_id = u1.user_id
            LEFT JOIN user AS u2 ON appointment.provider_id = u2.user_id
            LEFT JOIN clinic AS c ON u2.clinic_id = c.clinic_id
            WHERE appointment.user_id = ?;';

        $prep = $this->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

        $schedule =[];

        if($res){
            $schedule = $prep->fetchAll(\PDO::FETCH_OBJ);
        }

        return $schedule;

    }
}
<?php


namespace App\Models;
use App\Core\Model;
use App\Core\Field;
use App\Validators\BitValidator;
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


    public function getScheduleDoctor($id){
        $sql="SELECT 
                appointment.*,
                u1.name AS patient_name,
                u1.surname AS patient_surname,
                u1.email as patient_email,
                u1.profile_photo AS patient_photo,
                u1.phone AS patient_phone,
                u1.profile_photo AS patient_photo,
                u2.name AS doctor_name,
                u2.surname AS doctor_surname,
                u2.profile_photo as photo,
                u2.caregiver_data as doctor,
                c.*
            FROM appointment 
            LEFT JOIN user AS u1 ON appointment.user_id = u1.user_id
            LEFT JOIN user AS u2 ON appointment.provider_id = u2.user_id
            LEFT JOIN clinic AS c ON u2.clinic_id = c.clinic_id
            WHERE u2.user_id = ?";

        $prep = $this->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

        $schedule =[];

        if($res){
            $schedule = $prep->fetchAll(\PDO::FETCH_OBJ);
        }

        return $schedule;

    }

    public function getNotification($id){
       $sql = "SELECT 
            a.appointment_id AS appointment_id, 
            a.status as status, 
            a.appointment_date as appointment_date,
            a.caregiver_data as caregiver_data, 
            a.start_time as start_time, 
            a.updated_at as updated_at,
            u.name AS user_name, 
            u.surname AS user_surname
        FROM appointment AS a
        LEFT JOIN user AS u ON u.user_id = a.user_id
        WHERE a.provider_id = ?  
          AND a.status IN ('scheduled', 'canceled')
          AND a.is_read = 0
        ORDER BY a.updated_at DESC";


        $prep = $this->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);
        $appointments = $prep->fetchAll(\PDO::FETCH_OBJ);

        return $appointments;

    }


        public function getAllSearch(string $keywords){

        $sql= "SELECT * 
        FROM `appointment`
        LEFT JOIN `user` on appointment.user_id = user.user_id 
        WHERE `name` LIKE ? OR `surname` LIKE ? OR `phone` LIKE ? ;";
        $keywords = '%'.$keywords.'%';
        $prep = $this->getConnection()->prepare($sql);

        if(!$prep){
            return [];
        }

        $res = $prep->execute([$keywords,$keywords,$keywords]);
        if(!$res){
            return [];
        }

        return $prep->fetchAll(\PDO::FETCH_OBJ);


    }
    
}
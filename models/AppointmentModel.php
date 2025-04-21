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
}
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
            'days'=>new Field((new JSONValidator())),
            'start_time'=>new Field((new JSONValidator())),
            'end_time'=>new Field((new JSONValidator())),
            
        ];
    }
}
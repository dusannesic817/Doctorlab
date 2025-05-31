<?php


namespace App\Models;

use App\Core\Model;
use App\Validators\BitValidator;
use App\Validators\DateTimeValidator;
use App\Core\Field;
use App\Validators\JSONValidator;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;
use PDO;



class ClinicModel extends Model{

        protected function getFields(){
        return [
            
            'clinic_id'=>new Field((new NumberValidator())->setIntegerLength(10), false),
            'name'=>new Field((new StringValidator())->setMaxLength(255)),
            'address'=>new Field((new StringValidator())->setMaxLength(255)),
            'city'=>new Field((new StringValidator())->setMaxLength(100)),
            'latitude'  => new Field((new NumberValidator())->setDecimal()->setMaxDecimalDigits(6)),
            'longitude'  => new Field((new NumberValidator())->setDecimal()->setMaxDecimalDigits(6)),
           
                      
        ];
    }
}
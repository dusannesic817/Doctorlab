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
            'clinic_name'=>new Field((new StringValidator())->setMaxLength(255)),
            'address'=>new Field((new StringValidator())->setMaxLength(255)),
            'city'=>new Field((new StringValidator())->setMaxLength(100)),
            'latitude'  => new Field((new NumberValidator())->setDecimal()->setMaxDecimalDigits(10)),
            'longitude'  => new Field((new NumberValidator())->setDecimal()->setMaxDecimalDigits(10)),
           
                      
        ];
    }

    public function findClinic(array $data)
{
    $sql = "SELECT clinic_name,address,city FROM clinic WHERE clinic_name = ? AND address = ? AND city = ? LIMIT 1";
    $stmt = $this->getConnection()->prepare($sql);
    $success = $stmt->execute([$data['clinic_name'], $data['address'], $data['city']]);

    if ($success) {
        return $stmt->fetch(PDO::FETCH_OBJ) ?: null;
    }

    return null;
}

}
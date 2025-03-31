<?php

namespace App\Models;
use App\Core\Model;
use App\Validators\BitValidator;
use App\Validators\DateTimeValidator;
use App\Core\Field;
use App\Validators\JSONValidator;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;

class UserModel extends Model{

    protected function getFields(){
        return [
            'user_id'=>new Field((new NumberValidator())->setIntegerLength(10), false),
            'clinic_id'=>new Field((new NumberValidator())->setIntegerLength(10)),
            'google_id'=>new Field((new NumberValidator())->setIntegerLength(10)),
            'name'=>new Field((new StringValidator())->setMaxLength(255)),
            'surname'=>new Field((new StringValidator())->setMaxLength(255)),
            'gender'=>new Field((new StringValidator())->setMaxLength(20)),
            'email' => new Field((new StringValidator())->setMaxLength(255)),
            'phone' => new Field((new StringValidator())->setMaxLength(20)),
            'password_hash'=>new Field((new StringValidator())->setMaxLength(255)),
            'profile_photo'=>new Field((new StringValidator())->setMaxLength(150)),
            'role'=>new Field((new StringValidator())->setMaxLength(20)),
            'birth'=>new Field((new DateTimeValidator())->allowDate()),
            'diploma_pdf'=>new Field((new StringValidator())->setMaxLength(150)),
            'caregiver_data'=>new Field((new JSONValidator())),
            'university_data'=>new Field((new JSONValidator())),
            'created_at'=>new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
        ];
    }


    public function getByUsername(string $username){
        return $this->getByFieldName('username',$username);
    }



    public function getAllCaregivers($fieldName,$value){
        $users=$this->getAllByFieldName($fieldName,$value);

        foreach ($users as $user) {
            $user->caregiver_data = json_decode($user->caregiver_data, true);
            $user->university_data = json_decode($user->university_data, true);
        }

        return $users;
    }

    public function getCaregiver($id){
        $caregiver = $this->getById($id);

        

        if ($caregiver) { // Proveri da li je rezultat validan
            $caregiver->caregiver_data = json_decode($caregiver->caregiver_data, true);
        }

        return $caregiver;

        
    }


}
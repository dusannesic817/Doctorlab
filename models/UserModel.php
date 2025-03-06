<?php

namespace App\Models;
use App\Core\Model;
use App\Validators\BitValidator;
use App\Validators\DateTimeValidator;
use App\Core\Field;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;

class UserModel extends Model{

    protected function getFields(){
        return [
            'user_id'=>new Field((new NumberValidator())->setIntegerLength(10), false),
            'forename'=>new Field((new StringValidator())->setMaxLength(255)),
            'surname'=>new Field((new StringValidator())->setMaxLength(255)),
            'address'=>new Field((new StringValidator())->setMaxLength(255)),
            'email' => new Field((new StringValidator())->setMaxLength(255)),
            'username' => new Field((new StringValidator())->setMaxLength(255)),
            'password_hash'=>new Field((new StringValidator())->setMaxLength(255)),
            'is_active'=>new Field((new BitValidator())),
            'created_at'=>new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
        ];
    }


    public function getByUsername(string $username){
        return $this->getByFieldName('username',$username);
    }





}
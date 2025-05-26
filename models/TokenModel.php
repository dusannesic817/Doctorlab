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

class TokenModel extends Model{

    protected function getFields(){
        return [
            'token_id'=>new Field((new NumberValidator())->setIntegerLength(10), false),
            'user_id'=>new Field((new NumberValidator())->setIntegerLength(10)),
            'token'=>new Field((new StringValidator())->setMaxLength(255)),
            'type'=>new Field((new StringValidator())->setMaxLength(255)),
            'is_used'=>new Field((new BitValidator())),
            'expires_at'=>new Field((new DateTimeValidator())->allowDate()->allowTime()),
            'created_at'=>new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
            'updated_at'=>new Field((new DateTimeValidator())->allowDate()->allowTime(), false),
            
        ];
    }

public function findByToken($token){
    $sql = "SELECT * FROM token WHERE `token` = ? AND is_used = 0;";
    $prep = $this->getConnection()->prepare($sql);
    $res = $prep->execute([$token]);

    $item = NULL;
    if($res){
        $item = $prep->fetch(PDO::FETCH_OBJ);
    }

    return $item;
}


    public function verifyUser($token){

        $sql="UPDATE token 
                SET is_used = 1 
                WHERE token = ? AND is_used = 0 AND expires_at > NOW()";
        $prep = $this->getConnection()->prepare($sql);
        $prep->execute([$token]);

    }

    public function isVerified($id){
        $sql="SELECT * FROM token WHERE type='verify_email' AND user_id=?";
        $prep = $this->getConnection()->prepare($sql);
        $res=$prep->execute([$id]);
        
        $item = NULL;

        if($res){
            $item = $prep->fetch(PDO::FETCH_OBJ);
        }

        return $item;
    }



}
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

class UserModel extends Model{

    protected function getFields(){
        return [
            'user_id'=>new Field((new NumberValidator())->setIntegerLength(10), false),
            'clinic_id' => new Field((new NumberValidator())->setIntegerLength(10)->canBeNull()),
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

    
<<<<<<< HEAD
    public function getUser($id) {
        $sql = 'SELECT * FROM doctorlab.user
                LEFT JOIN clinic ON clinic.clinic_id = user.clinic_id
                WHERE user.user_id = ?;';
=======
	public function getUser($id){
        $sql = 'SELECT * FROM doctorlab.user
                LEFT JOIN clinic on clinic.clinic_id = user.clinic_id
                WHERE user.user_id=?;';
>>>>>>> 37740b0d96ff7ca8e98eb485a5d9ada65295e0f4

        $prep = $this->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

<<<<<<< HEAD
        if ($res) {
            $user = $prep->fetch(PDO::FETCH_OBJ);

            if ($user) {
                $user->caregiver_data = json_decode($user->caregiver_data, true);
                $user->university_data = json_decode($user->university_data, true); 
            }

            return $user;
        }

        return null;
    }



=======
        $user=NULL;

        if($res){
            return $prep->fetch(PDO::FETCH_OBJ);
        }

        return $user;    
    }
>>>>>>> 37740b0d96ff7ca8e98eb485a5d9ada65295e0f4


    public function getAllCaregivers($fieldName,$value){
        $users=$this->getAllByFieldName($fieldName,$value);

        foreach ($users as $user) {
            $user->caregiver_data = json_decode($user->caregiver_data, true);
            $user->university_data = json_decode($user->university_data, true);
        }

        return $users;
    }

    public function getCaregiver(int $id){
        $caregiver = $this->getById($id);

        if ($caregiver) {
            $caregiver->caregiver_data = json_decode($caregiver->caregiver_data, true);
        }

        return $caregiver;
        
    }






}
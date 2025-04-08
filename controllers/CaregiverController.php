<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Role\UserRoleController;
use App\Models\AvailabilityModel;
use App\Models\UserModel;
use App\Validators\StringValidator;

class CaregiverController extends Controller{


    public function index(){

        $caregiver = new AvailabilityModel($this->getDatabaseConnection());

        $data = $caregiver->getCaregiversAvailability();

        date_default_timezone_set("Europe/Belgrade");
        $date = date("F j l");



     /* var_dump($caregivers);
        exit();*/

        $niz = [];
        $novi = [];
        $caregivers = [];
        
        foreach ($data as $value) {
            $prikazuj = false;
        
          
            foreach ($value->schedule['schedule'] as $v) {
               
                if ($v['date'] === $date) {
                    $prikazuj = true;
                }
               
                if ($prikazuj) {
                    $niz[$v['date']] = [
                        'times' => $v['times'] 
                    ];
                }
            }
            
            $novi[$value->user_id] = $niz;
            $caregivers[] = [
                'user_id' => $value->user_id,
                'name' => $value->name,
                'surname' => $value->surname,
                'profile_photo'=>$value->profile_photo,
                'doctor' => $value->caregiver_data['title'],
                'schedule' => $novi[$value->user_id]  
            ];
        }
        /*var_dump($caregivers);
        exit();*/

      

        $count=0;
        foreach($caregivers as $value){
           $count++;
        }


        $this->set('caregivers', $caregivers);
        $this->set('count', $count);


    }

    public function show($id){
        $user = new UserModel($this->getDatabaseConnection());
        $caregiver = $user->getById($id);

        if($caregiver->role=='caregiver'){
            $this->set('caregiver',$caregiver);
        }
    }

   public function create(){


   }



   public function store(){

        $userModel = new UserModel($this->getDatabaseConnection());
        
        
        $forename = filter_input(INPUT_POST,'first_name');
        $surname = filter_input(INPUT_POST,'last_name');
        $email = filter_input(INPUT_POST,'email');
        $date = filter_input(INPUT_POST,'birth');
        $gender = filter_input(INPUT_POST, 'gender');
        $password1 = filter_input(INPUT_POST,'password');
        $password2 = filter_input(INPUT_POST,'retype_password');
       
        
        if($password1 !== $password2){
            $this->set('message','Doslo je do greske: Lozinke se ne poklapaju');
            return;

        }

        $stringValidator = (new StringValidator())->setMinLength(7)->setMaxLength(120);
        if(!$stringValidator->isValid(($password1))){
            $this->set('message','Doslo je do greske: Lozinke nije ispravnog formata');
            return;

        }
        $user = $userModel->getByFieldName('email',$email);
        

        if($user){
            $this->set('message','Doslo je do greske: Email vec postoji');
            return;
        }


        $pass_hash = password_hash($password1, PASSWORD_DEFAULT);

        $user_id=$userModel->add([
            'name'=>$forename,
            'surname'=>$surname,
            'gender'=>$gender,
            'email'=>$email,
            'password_hash'=>$pass_hash,
            'role'=>'caregiver',
            'birth'=>$date,
           
            
        ]);

        if(!$user_id){
            $this->set('message', "Doslo je do greske, neuspela registracija");
            return;
        }


        $this->set("message", "Napravljen je novi nalog");

   }


    public function login(){

   }

   public function authenticate(){

        $email = filter_input(INPUT_POST, 'email_login');
        $password = filter_input(INPUT_POST, 'password_login');


        $userModel = new UserModel($this->getDatabaseConnection());
        $email = $userModel->getByFieldName('email',$email);


        if(!$email){
            $this->set('message','Invalid password or email');
            return;
        }

       $pass=$email->password_hash;

       if(!password_verify($password,$pass)){
        sleep(2);
        $this->set('message','Invalid password or email');
        return;
       }

       $this->getSession()->put('user_id',$email->user_id);
       $this->getSession()->save();

       $this->redirect('/profile');


   }

   
}
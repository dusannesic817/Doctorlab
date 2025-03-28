<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\UserModel;
use App\Validators\StringValidator;

class UserController extends Controller{


    public function index(){
        
    }

    public function show($id){
       
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
            'role'=>'client',
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
       $this->getSession()->put('role',$email->role);
       $this->getSession()->save();

       $auth = $this->getSession()->get('user_id');
       

       if($email->role=='client'){
        $this->redirect('/client/appointmens/'.$auth);
       
       }else{
        $this->redirect('/caregiver/appointmens/'.$auth);
       
       }


      


   }


   public function logout(){

    if($this->getSession()->clear())
      
    $this->redirect('/');

}



}
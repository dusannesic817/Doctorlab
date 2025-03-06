<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Role\UserRoleController;
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
        
        
        $forname = filter_input(INPUT_POST,'reg_forename');
        $surname = filter_input(INPUT_POST,'reg_surname');
        $address = filter_input(INPUT_POST,'reg_address');
        $email = filter_input(INPUT_POST,'reg_email');
        $username = filter_input(INPUT_POST,'reg_username');
        $password1 = filter_input(INPUT_POST,'reg_password_1');
        $password2 = filter_input(INPUT_POST,'reg_password_2');


       /* print_r([
        $forname ,
        $surname ,
        $address ,
        $email ,
        $username, 
        $password1, 
        $password2 ,

        ]);*/


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
        $user_name = $userModel->getByFieldName('username',$username);

        if($user){
            $this->set('message','Doslo je do greske: Email vec postoji');
            return;
        }

        if($user_name){
            $this->set('message','Doslo je do greske: Username vec postoji');
            return;
        }

        $pass_hash = password_hash($password1, PASSWORD_DEFAULT);

        $user_id=$userModel->add([
            'forename'=>$forname,
            'surname'=>$surname,
            'address'=>$address,
            'email'=>$email,
            'username'=>$username,
            'password_hash'=>$pass_hash,
            'is_active'=>1,
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

        $username = filter_input(INPUT_POST, 'login_username');
        $password = filter_input(INPUT_POST, 'login_password');


        $userModel = new UserModel($this->getDatabaseConnection());
        $user_name = $userModel->getByFieldName('username',$username);


        if(!$user_name){
            $this->set('message','Neispravni username');
            return;
        }

       $pass=$user_name->password_hash;

       if(!password_verify($password,$pass)){
        sleep(2);
        $this->set('message','Neispravna lozinka');
        return;
       }

       $this->getSession()->put('user_id',$user_name->user_id);
       $this->getSession()->save();

       $this->redirect('/profile/');


   }
}
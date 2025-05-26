<?php


namespace App\Controllers;

use App\Core\Controller;
use App\Models\TokenModel;
use App\Models\UserModel;



class TokenController extends Controller{

public function verify($tokenString){
        $tokenModel = new TokenModel($this->getDatabaseConnection()); 
        $token_obj = $tokenModel->findByToken($tokenString);

        if ($token_obj) {
            $tokenModel->verifyUser($token_obj->token); 
            $this->redirect("/user/login");
        }

    }

    public function resetForm($tokenString){
        $tokenModel = new TokenModel($this->getDatabaseConnection()); 
        $token_obj = $tokenModel->findByToken($tokenString);

       if(!$token_obj){
            $this->set('invalidToken','Token has been expired');
            return;
        }

        $this->getSession()->put('token',$tokenString);
        $this->getSession()->save();
        $this->redirect("/reset/$tokenString");
        

        
    }
    public function reset(){

    }


    public function confirmReset(){
        $token = $this->getSession()->get('token');
        
        $tokenModel = new TokenModel($this->getDatabaseConnection()); 
        $token_obj = $tokenModel->findByToken($token);
        $user_id = $token_obj->user_id;

        $userModel= new UserModel($this->getDatabaseConnection());
        $user= $userModel->getById($user_id);

        $password = filter_input(INPUT_POST,'password_reset');
        $password1 = filter_input(INPUT_POST,'password_reset1');

        if($password!== $password1){
            $this->set("message",'Password must be same');
            return;
        }

        


        var_dump($user_id,$token);
        exit();

    }

   
}

























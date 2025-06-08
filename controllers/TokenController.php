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




   
}

























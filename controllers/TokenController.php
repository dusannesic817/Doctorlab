<?php


namespace App\Controllers;

use App\Core\Controller;
use App\Models\TokenModel;



class TokenController extends Controller{
public function verify($tokenString)
    {
        $tokenModel = new TokenModel($this->getDatabaseConnection()); 
        $token_obj = $tokenModel->findByToken($tokenString);

        if ($token_obj) {
            $tokenModel->verifyUser($token_obj->token); 
            $this->redirect("/user/login");
        }

    }
   
}























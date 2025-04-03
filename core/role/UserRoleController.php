<?php

namespace App\Core\Role;

use App\Core\Controller;
use App\Models\UserModel;

class UserRoleController extends Controller{
    public function __pre(){
        $user_id = $this->getSession()->get('user_id');

        if ($user_id === null) {
            $this->redirect('/user/login');
            return;
        }

     


    }  
}
<?php

namespace App\Core\Role;

use App\Core\Controller;

class UserRoleController extends Controller{
    public function __pre(){
        $user_id = $this->getSession()->get('user_id');
        if($user_id===null){
            $this->redirect('/user/login');
        }
    }
}
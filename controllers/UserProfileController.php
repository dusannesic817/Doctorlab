<?php

namespace App\Controllers;


use App\Core\Role\UserRoleController;
use App\Models\UserModel;


class UserProfileController extends UserRoleController{

   public function index(){
    
   }

   public function show($id){
      
      $user = new UserModel($this->getDatabaseConnection());

      $client = $user->getById($id);

      if($client->role=='client'){
         $this->set('client',$client);
      }
   }


   public function edit($id){
      
   }

   public function update($id){

   }



}










<?php

namespace App\Controllers;


use App\Core\Role\UserRoleController;
use App\Models\UserModel;


class CaregiverProfileController extends UserRoleController{


    public function index(){
        
    }

    public function show($id){
        $user = new UserModel($this->getDatabaseConnection());
        $caregiver = $user->getById($id);

        if($caregiver->role=='caregiver'){
            $this->set('caregiver',$caregiver);
        }
    }



    
   public function edit($id){
    $user = new UserModel($this->getDatabaseConnection());
    $caregiver = $user->getById($id);


    $jsonString = file_get_contents('public/json/university_data.json');
    $data = json_decode($jsonString, true);
    if ($data === null) {
        die("Wrong");
    }

    $jsonCaregiver = file_get_contents('public/json/caregiver_data.json');
    $caregiverData = json_decode($jsonCaregiver, true);

    if ($caregiverData === null) {
        die("Wrong");
    }



    if($caregiver->role=='caregiver'){

        $this->set('caregiver',$caregiver);
        $this->set('data',$data);
        $this->set('caregiverData',$caregiverData);
    }
    
   }

   public function update($id){
    
   }


   public function destroy($id){

   }




}
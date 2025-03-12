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

    $data = $this->getJson('university_data.json');
    $caregiverData = $this->getJson('caregiver_data.json');

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



   /*private function getJson($path){
        if (!file_exists($path)) {
        throw new \Exception("File not found: " . $path);
        }
        $jsondata = file_get_contents($path);

        $decodedData = json_decode($jsondata, true);

        if ($decodedData === null) {
            throw new \Exception("Error decoding JSON data from file: " . $path);
        }
    
        return $decodedData;

   }*/


}
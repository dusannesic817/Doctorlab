<?php

namespace App\Controllers;


use App\Core\Role\UserRoleController;
use App\Models\UserModel;
use Exception;


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

    $userModel = new UserModel($this->getDatabaseConnection());
    $user = $userModel->getById($id);
    $pass=$user->password_hash;
    $photo=$user->profile_photo;
    $pdf = $user->diploma_pdf;
    $user_phone = $user->phone;
    $user_name= $user->name;
    $user_surname=$user->surname;

    $doctorFor = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
    $university = filter_input(INPUT_POST, 'university', FILTER_SANITIZE_SPECIAL_CHARS);
    $old_password = filter_input(INPUT_POST,'old_password');
    $new_password = filter_input(INPUT_POST,'new_password');
    $fullName = filter_input(INPUT_POST, 'new_name');
    $phone=filter_input(INPUT_POST,'phone');

        
    if(!password_verify($old_password,$pass)){
        
        $this->set('old_password','Invalid old password');
        return;
    }

    $pass_hash = password_hash($new_password, PASSWORD_DEFAULT);



    


    $nameParts = explode(' ', $fullName);


   $firstName = $nameParts[0];
   $lastName = isset($nameParts[1]) ? $nameParts[1] : ''; 

   if(!empty($fullName)){
    $first_name = $firstName;
    $last_name = $lastName;
    }else{
        $first_name=$user_name;
        $last_name=$user_surname;
    }

    if(!empty($phone)){
        $phone_input = $phone;
    }else{
        $phone_input = $user_phone;
    }
    





    $name = "image_".rand(1,100).'_user_id_'.$id;
    if (!empty($_FILES['profile_photo']['name'])) {
        $uploadImage = $this->imageUpload('profile_photo', $name);
        if (!$uploadImage) {
            return; 
        }
    } else {
        $uploadImage = $photo; 
    }
      
    $pdf_name = 'diploma_user_id_'.$id;
    if (!empty($_FILES['diploma_pdf']['name'])) {
        $uploadPdf = $this->pdfUpload('diploma_pdf', $pdf_name);
        if (!$uploadPdf) {
            return; 
        }
    } else {
        $uploadPdf = $pdf; 
    }

    
    $editData=[
        'name'=>$first_name,
        'surname'=>$last_name,
        'phone'=> $phone_input,
        'password_hash'=>$pass_hash,
        'profile_photo' => $uploadImage,
        'diploma_pdf'=>$uploadPdf,
        'caregiver_data' => json_encode(["title" => $doctorFor]),
        'university_data' => json_encode(["university" => $university]),
    ];

   
   
   

    
    $edit = $userModel->editById($id,$editData);

    if(!$edit){
        $this->set("message", "Nije moguce izmeti profile");
        return;
    }

 

    $this->redirect("/caregiver/profile/".$id);

   }
   


   public function destroy($id){

   }


   private function imageUpload($fieldName, $fileName ){


        $uploadPath = new \Upload\Storage\FileSystem(\Configruation::UPLOAD_DIR_IMAGES);
        $file = new \Upload\File($fieldName,$uploadPath);

        $file->setName($fileName);

     

        try{
            $file->upload();
            return $file->getNameWithExtension();

        }catch(Exception $e){
            $this->set('message', "Error " .implode(', ', $file->getErrors()));
            return false;
        }

   }

   
   private function pdfUpload($fieldName, $fileName ){

    $uploadPath = new \Upload\Storage\FileSystem(\Configruation::UPLOAD_DIR_PDF);
    $file = new \Upload\File($fieldName,$uploadPath);


    $file->setName($fileName);


    try{
        $file->upload();
        return $file->getNameWithExtension();

    }catch(Exception $e){
        $this->set('message', "Error " .implode(', ', $file->getErrors()));
        return false;
    }

}



}
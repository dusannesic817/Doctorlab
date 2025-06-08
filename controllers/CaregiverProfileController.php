<?php

namespace App\Controllers;


use App\Core\Role\UserRoleController;
use App\Models\ClinicModel;
use App\Models\UserModel;
use App\Services\GeoCodic;
use Exception;


class CaregiverProfileController extends UserRoleController{

    public function show($id){
        $user = new UserModel($this->getDatabaseConnection());
        $caregiver = $user->getById($id);

        $change=$this->getSession()->get('success_edit');
    
        if($caregiver->role=='caregiver'){
            $this->set('caregiver',$caregiver);
            $this->set('change',$change);
        }

        $this->getSession()->remove('success_edit');

         $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);
    }


   public function edit($id){
    
    $user = new UserModel($this->getDatabaseConnection());
    $caregiver = $user->getUser($id);
    $doctor = $caregiver->caregiver_data;
    $university_data = $caregiver->university_data;
    $decodedData = json_decode($doctor, true);
    $decodeUniversity = json_decode($university_data,true);

    $university = $decodeUniversity['university'];
    

    $title = $decodedData['title'];

    $data = $this->getJson('university_data.json');
    $caregiverData = $this->getJson('caregiver_data.json');


    if($caregiver->role=='caregiver'){

        $this->set('caregiver',$caregiver);
        $this->set('data',$data);
        $this->set('caregiverData',$caregiverData);
        $this->set('title',$title);
        $this->set('university',$university);
    }

     $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);
    
   }

 public function update($id){

    $clinic = filter_input(INPUT_POST,'clinic');
    $address = filter_input(INPUT_POST,'clinic_address');
    $city = filter_input(INPUT_POST,"clinic_city");


    $last_clinic_id=null;

    $userModel= new UserModel($this->getDatabaseConnection());
    $user = $userModel->getById($id);
    $clinicModel = new ClinicModel($this->getDatabaseConnection());

    if($user->clinic_id!=null){
    $clinc_data =$clinicModel->getById($user->clinic_id);
    $last_clinic_id=$clinc_data->clinic_id;

    }

    if (!empty($clinic) && !empty($address) && !empty($city)) {

    $geoCodic = new GeoCodic();
    $data = $geoCodic->geocode($address. ', '. $city);
        
    $clinicData = [
        'clinic_name'=>$clinic,
        'address'=>$address,
        'city'=>$city,
        'latitude'=>$data['lat'],
        'longitude'=>$data['lng']
    ];
     $last_clinic_id = $this->findOrCreate($clinicData);
    }

    
    $pass=$user->password_hash;
    $photo=$user->profile_photo;
    $pdf = $user->diploma_pdf;
    $user_phone = $user->phone;
    $user_name= $user->name;
    $user_surname=$user->surname;
    $caregiverData = json_decode($user->caregiver_data, true);
    $universityData = json_decode($user->university_data, true);


    $doctorFor = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
    $university = filter_input(INPUT_POST, 'university', FILTER_SANITIZE_SPECIAL_CHARS);
    $old_password = filter_input(INPUT_POST,'old_password');
    $new_password = filter_input(INPUT_POST,'new_password');
    $fullName = filter_input(INPUT_POST, 'new_name');
    $phone=filter_input(INPUT_POST,'phone');

        
    if (!empty($old_password) && !password_verify($old_password, $pass)) {
        $this->set('old_password', 'Invalid old password');
        return;
    }


    $pass_hash = !empty($new_password) ? password_hash($new_password, PASSWORD_DEFAULT) : $pass;

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

    $oldDoctorFor = $caregiverData['title'] ?? '';
    $oldUniversity = $universityData['university'] ?? '';

    $finalDoctorFor = !empty($doctorFor) ? $doctorFor : $oldDoctorFor;
    $finalUniversity = !empty($university) ? $university : $oldUniversity;
    
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
        'clinic_id' =>$last_clinic_id,
        'name'=>$first_name,
        'surname'=>$last_name,
        'phone'=> $phone_input,
        'password_hash'=>$pass_hash,
        'profile_photo' => $uploadImage,
        'diploma_pdf'=>$uploadPdf,
        'caregiver_data' => json_encode(["title" => $finalDoctorFor]),
        'university_data' => json_encode(["university" => $finalUniversity]),
    ];

    $edit = $userModel->editById($id,$editData);


    if(!$edit){
        $this->set("message", "Nije moguce izmeti profile");
        return;
    }

    $this->getSession()->put('success_edit',"Successfully changed data");
    $this->getSession()->save();
    
    $this->redirect("/caregiver/profile/".$id);

   }
   


   public function destroy($id){
        $userModel = new UserModel($this->getDatabaseConnection());
        $caregiver = $userModel->deleteById($id);
        $this->getSession()->remove("user_id");
        $this->getSession()->save();  
        $this->redirect('/');
   }

   public function logout() {
        $this->getSession()->remove("user_id");
        $this->getSession()->save();

        sleep(2);

        $this->redirect('/');
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


public function findOrCreate(array $clinicData){
    $clinicModel = new ClinicModel($this->getDatabaseConnection());
   
    $clinic = $clinicModel->findClinic($clinicData);

    if ($clinic) {
        return $clinic->clinic_id; 
    }else{
        
    return $clinicModel->add($clinicData); 

    }

}



}
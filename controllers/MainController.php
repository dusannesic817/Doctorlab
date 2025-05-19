<?php

namespace App\Controllers;
use App\Core\Controller;


use App\Models\AvailabilityModel;
use App\Models\ClinicModel;
use App\Models\UserModel;
use Google\Service\Doubleclicksearch\Availability;

class MainController extends Controller{

    public function home(){

     $clinicModel = new ClinicModel($this->getDatabaseConnection());
     $clinices= $clinicModel->getAll();
     $doctors=$this->getJson('caregiver_data.json');

    $appointment = $this->getSession()->get('appointment');
    $caregiver = null; 

    if (!empty($appointment) && isset($appointment['caregiver_id'])) {
        $doctor_session_id = $appointment['caregiver_id'];

        $userModel = new UserModel($this->getDatabaseConnection());
        $caregiver = $userModel->getById((int)$doctor_session_id);
    }
     $this->set('caregiver', $caregiver);

     $user_id = $this->getSession()->get('user_id');
     $successRegistration = $this->getSession()->get('successRegistration');

     if(isset($appointment) && !isset($user_id)){
     $this->set('appointment',$appointment);
     }


     $this->set('doctors', $doctors);
    
     
     $this->set('clinices',$clinices);

      if(isset($successRegistration)){
         $this->set('successRegistration',$successRegistration);
     }
      $this->getSession()->remove('successRegistration');
        $this->getSession()->save();

    }
}
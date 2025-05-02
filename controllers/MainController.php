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
     $user_id = $this->getSession()->get('user_id');

     if(isset($appointment) && !isset($user_id)){
     $this->set('appointment',$appointment);
     }

     $this->set('doctors', $doctors);
     
     $this->set('clinices',$clinices);


    }
}
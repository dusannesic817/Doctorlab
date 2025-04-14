<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\AppointmentModel;
use App\Models\UserModel;


class MakeAppointmentController extends Controller{

    

    public function type($id){
       /* $userModel = new UserModel($this->getDatabaseConnection());
    
        $caregiver = $userModel->getById($id);
    
      
        $caregiverData = $this->getJson('caregiver_data.json');
        
        if ($caregiver->role =='caregiver') {
            $caregiver->caregiver_data = json_decode($caregiver->caregiver_data, true);
            $title = $caregiver->caregiver_data['title'] ?? null;
    
            if ($title) {
                foreach ($caregiverData['doctors'] as $doctor) {
                    if ($doctor['title'] === $title) {
                        $caregiver->caregiver_data = array_merge($caregiver->caregiver_data, $doctor);
                        break;
                    }
                }
            }
        }else{
            $this->redirect('/');
        }
    var_dump($caregiver);*/
    }
    
    


}
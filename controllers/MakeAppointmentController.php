<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\AppointmentModel;
use App\Models\UserModel;


class MakeAppointmentController extends Controller{


    public function create()
    {
    
        $caregiverId = filter_input(INPUT_POST, 'caregiver_id', FILTER_SANITIZE_NUMBER_INT);
        $caregiverName = filter_input(INPUT_POST, 'caregiver_name', );
        $day = filter_input(INPUT_POST, 'day', );
        $time = filter_input(INPUT_POST, 'time', );
    
   
        $this->getSession()->put("appointment", [
            'caregiver_id' => $caregiverId,
            'caregiver_name' => $caregiverName,
            'day' => $day,
            'time' => $time,
        ]);
    

    }
    
    

    public function type($id){

       

       $userModel = new UserModel($this->getDatabaseConnection());
    
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

        $this->set('caregiver',$caregiver);
        
       
    }
    
    


}
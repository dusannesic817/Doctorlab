<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\AppointmentModel;
use App\Models\UserModel;


class MakeAppointmentController extends Controller{


    public function create()
    {
    
        $appointment= $this->getSession()->get("appointment");

       if(!isset($appointment)){
        $this->redirect('/');
       }
       $userModel= new UserModel($this->getDatabaseConnection());
       $caregiver = $userModel->getCaregiver($appointment['caregiver_id']);

       $this->set('caregiver',$caregiver);
       $this->set('appointment',$appointment);


    }
    public function store() {
       
        if (isset($_POST['caregiver_data']) && !isset($_POST['caregiver_id'])) {
            $caregiverData = filter_input(INPUT_POST, 'caregiver_data');
            $this->getSession()->update('appointment', ['caregiver_data' => $caregiverData]);
            return;
        }
    
        
        $caregiverId = (int) filter_input(INPUT_POST, 'caregiver_id', FILTER_SANITIZE_NUMBER_INT);
        $caregiverName = filter_input(INPUT_POST, 'caregiver_name');
        $dayRaw = filter_input(INPUT_POST, 'day'); 
        $day = (new \DateTime($dayRaw))->format('Y-m-d');
       
        $timeRaw = filter_input(INPUT_POST, 'time');
        $time = (new \DateTime($timeRaw))->format('H:i:s');
      
    
        $this->getSession()->put("appointment", [
            'caregiver_id' => $caregiverId,
            'caregiver_name' => $caregiverName,
            'day' => $day,
            'time' => $time,
            'caregiver_data' => null,
            'user_id'=>null
        ]);


    }

    public function storeAppointment(){

        $appointment = $this->getSession()->get("appointment");

        $dataToInsert = [
            'user_id' => 2,
            'provider_id' => $appointment['caregiver_id'],
            'caregiver_data' => $appointment['caregiver_data'],
            'appointment_date' => $appointment['day'],
            'start_time' => $appointment['time'],
            'status' => 'scheduled'
        ];

       
        
        $makeAppointmentModel = new AppointmentModel($this->getDatabaseConnection());
        $makeAppointmentModel->add($dataToInsert);

       /* if($makeAppointmentModel){
            $this->getSession()->remove('appointment');
            $this->redirect('/');
        }*/

        $this->redirect('/');
    }
    
    

    public function type($id){

        $userModel = new UserModel($this->getDatabaseConnection());
    
        $caregiver = $userModel->getById($id);

        $caregiverData = $this->getJson('caregiver_data.json');
        
        if ($caregiver->role =='caregiver'){
            $caregiver->caregiver_data = json_decode($caregiver->caregiver_data, true);
            $title = $caregiver->caregiver_data['title'] ?? null;
    
            if ($title){
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
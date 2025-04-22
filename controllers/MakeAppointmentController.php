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
       
        if (!empty($_POST['caregiver_data']) && empty($_POST['caregiver_id'])) {
            $this->getSession()->update('appointment', [
                'caregiver_data' => filter_input(INPUT_POST, 'caregiver_data')
            ]);
            return;
        }

    
        if (!empty($_POST['caregiver_id'])) {
            $caregiverId   = (int) filter_input(INPUT_POST, 'caregiver_id', FILTER_SANITIZE_NUMBER_INT);
            $caregiverName = filter_input(INPUT_POST, 'caregiver_name', FILTER_SANITIZE_STRING);
            $day           = (new \DateTime(filter_input(INPUT_POST, 'day')))->format('Y-m-d');
            $time          = (new \DateTime(filter_input(INPUT_POST, 'time')))->format('H:i:s');
    
            $this->getSession()->put('appointment', [
                'caregiver_id'   => $caregiverId,
                'caregiver_name' => $caregiverName,
                'day'            => $day,
                'time'           => $time,
                'caregiver_data' => null,
                'user_id'        => $this->getSession()->get('user_id')
            ]);
            return;
        }

    }
    

    public function storeAppointment() {
        // 0) Provera autentifikacije
        $user_id = $this->getSession()->get('user_id');

        if ($user_id === null) {
            $this->getSession()->put('post_login_redirect', urldecode('/makeappointment/storeappointment'));

            $this->getSession()->save();
            return $this->redirect('/user/login');
        }
    
        // 1) Priprema podataka
        $appointment = $this->getSession()->get('appointment');
        $dataToInsert = [
            'user_id'          => $user_id,
            'provider_id'      => $appointment['caregiver_id'],
            'caregiver_data'   => $appointment['caregiver_data'],
            'appointment_date' => $appointment['day'],
            'start_time'       => $appointment['time'],
            'status'           => 'scheduled'
        ];
        
        var_dump($dataToInsert);
        exit();
       
        $model = new AppointmentModel($this->getDatabaseConnection());
        $model->add($dataToInsert);
    
        // 3) Čišćenje sesije i redirect
        $this->getSession()->remove('appointment');
        return $this->redirect('/client/appointments/'.$user_id);
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
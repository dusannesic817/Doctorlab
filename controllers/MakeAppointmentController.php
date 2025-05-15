<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\AppointmentModel;
use App\Models\AvailabilityModel;
use App\Models\UserModel;
use App\Core\MailService;

class MakeAppointmentController extends Controller{


    public function create(){
    
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
            $caregiverName = filter_input(INPUT_POST, 'caregiver_name');
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
       
        $user_id = $this->getSession()->get('user_id');
        $userModel= new UserModel($this->getDatabaseConnection());
        $user= $userModel->getById($user_id);
        $user_email=$user->email;

        if ($user_id === null) {
           
            $this->getSession()->put('post_login_redirect', '/makeappointment/storeappointment');
            $this->getSession()->save();
           
            $this->redirect('/user/login');
            
        }
        
        $appointment = $this->getSession()->get('appointment');

        if($appointment){
            $dataToInsert = [
                'user_id'          => $user_id,
                'provider_id'      => $appointment['caregiver_id'],
                'caregiver_data'   => $appointment['caregiver_data'],
                'appointment_date' => $appointment['day'],
                'start_time'       => $appointment['time'],
                'status'           => 'scheduled',
                
            ];
        }else{
            return $this->redirect('/');
        }
 
        
   
       
        $model = new AppointmentModel($this->getDatabaseConnection());
        $insert=$model->add($dataToInsert);
     
        $date = new \DateTime($appointment['day']);
        $formatted_date = $date->format('F j l');

        $time = new \DateTime($appointment['time']);
        $formatted_time = $time->format('H:i');
        $id = $appointment['caregiver_id'];

        if($insert){
            $avalabilityModel = new AvailabilityModel($this->getDatabaseConnection());
            $avalabilityModel->editAvailability($id,$formatted_date,$formatted_time,'busy');
            $mailer = new MailService();
            $mailer->sendMail($user_email,"You scheduled your appointment","Your appointment has been scheduled. Time: ".$formatted_date ." at ". $formatted_time);
              
           
        }
    
        $this->getSession()->remove('appointment');
        $this->getSession()->save();
        sleep(2);
        $this->redirect('/client/appointments/'.$user_id);


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

  public function cancelAppointment() {
        $this->getSession()->remove('appointment');
        $this->getSession()->remove('post_login_redirect');
        $this->getSession()->save();
        return $this->redirect('/'); 
    }


        public function sendNotification($id){

        $appointmentModel = new AppointmentModel($this->getDatabaseConnection());
        $appointments = $appointmentModel->getNotification($id);

        $notifications=[];

        foreach($appointments as $appointment){

            if($appointment->status=='canceled'){
               $message = "Appointment by {$appointment->user_name} {$appointment->user_surname} has been canceled.";
              $icon='<i class="fa-solid fa-triangle-exclamation" style="color:red;"></i>';
            }elseif($appointment->status=='scheduled'){
               $message = "Appointment by {$appointment->user_name} {$appointment->user_surname} has been scheduled.";
                $icon='<i class="fa-solid fa-circle-check" style="color:green;"></i>';
               
            }

             $notifications[] = [
        'message' => $message,
        'icon'=>$icon,
        'appointment_date' => $appointment->appointment_date,
        'start_time' => $appointment->start_time,
        'appointment_type' => $appointment->caregiver_data,
        'updated_at' => $appointment->updated_at,
    ];

        }


        header('Content-Type: application/json');
        echo json_encode($notifications);
        exit; 
    }
    


}
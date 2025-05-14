<?php

namespace App\Controllers;

use App\Core\Role\UserRoleController;
use App\Models\AppointmentModel;
use App\Models\AvailabilityModel;



class AppointmentController extends UserRoleController{
    public function index(){
        
        $appointmentModel = new AppointmentModel($this->getDatabaseConnection());

        $user_id=$this->getSession()->get('user_id');

        $myclients = $appointmentModel->getScheduleDoctor($user_id);

        $this->set('myclients',$myclients);
        
    }


    public function show($id){

        $appointmentModel = new AppointmentModel($this->getDatabaseConnection());
        $schedules = $appointmentModel->getSchedule($id);
        $doctor_schedule  = $appointmentModel->getScheduleDoctor($id);

        $myclients=[];
        foreach($doctor_schedule as $value){
            if($value->status=='scheduled'){
               $myclients[]=$value;
            }
        }

        $change=$this->getSession()->get('success_schedule');
        $this->set('change',$change);
     
            $this->set('schedules',$schedules);      
            $this->set('myclients', $myclients);

    
       
    
        $this->getSession()->remove('success_schedule');
    }

    public function client($id){

        $appointmentModel = new AppointmentModel($this->getDatabaseConnection());
        $schedules = $appointmentModel->getSchedule($id);
         $change=$this->getSession()->get('success_schedule');



            $this->set('change',$change);
            $this->set('schedules',$schedules);  
    }


    public function create(){

    }

    public function store(){

    }


    public function edit($id){
        $appointmentModel= new AppointmentModel($this->getDatabaseConnection());
    }

    public function update($id){
        $auth = $this->getSession()->get('user_id');
        $appointmentModel = new AppointmentModel($this->getDatabaseConnection());
        $updateStatus = $appointmentModel->editById($id,['status'=>'completed']);

        if ($updateStatus) {
            $referer = $_SERVER['HTTP_REFERER'] ?? '/caregiver/appointments/' . $auth;
            $this->redirect($referer);

        }
    }

    public function cancel($id){
        $auth = $this->getSession()->get('user_id');
        $appointmentModel = new AppointmentModel($this->getDatabaseConnection());
        $details = $appointmentModel->getById($id);

       
        $caregiver_id=$details->provider_id;

        $appointment_date= $details->appointment_date;
        $date = new \DateTime($appointment_date);
       
        $formatted_date = $date->format('F j l');
        

        $time_start =$details->start_time;
        $time = new \DateTime($time_start);
        $formatted_time = $time->format('H:i');


        $updateStatus = $appointmentModel->editById($id,['status'=>'canceled']);
        
        if ($updateStatus) {
            $availabilityModel = new AvailabilityModel($this->getDatabaseConnection());
            $availabilityModel->editAvailability($caregiver_id,$formatted_date,$formatted_time,'free');
           
        }

        $referer = $_SERVER['HTTP_REFERER'] ?? '/caregiver/appointments/' . $auth;
        $this->redirect($referer);


    }


    public function destroy($id){
        $auth= $this->getSession()->get('user_id');

        $appointmentModel= new AppointmentModel($this->getDatabaseConnection());

        $deleteAppointment = $appointmentModel->deleteById($id);

       if($deleteAppointment){
        $this->redirect('/caregiver/appointments/'.$auth);
       }

    }


    public function getNotification($id){
       

    }

    public function sendNotification(){

        $id= $this->getSession()->get("user_id");
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


/*

             $notifications[] = [
            'message' => $message,
            'appointment_date' => $appointment['appointment_date'],
            'start_time' => $appointment['start_time'],
            'appointment_type'=>$appointment['caregiver_data'],
            'updated_at' => $appointment['updated_at'],
        ];

*/ 

}
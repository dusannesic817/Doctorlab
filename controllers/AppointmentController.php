<?php

namespace App\Controllers;

use App\Core\Role\UserRoleController;
use App\Models\AppointmentModel;
use App\Models\AvailabilityModel;
use Google\Service\Doubleclicksearch\Availability;


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


        var_dump($myclients);
        exit();

        
        $change=$this->getSession()->get('success_schedule');
        $this->set('change',$change);
     
            $this->set('schedules',$schedules);      
            $this->set('myclients', $myclients);

    
       
    
        $this->getSession()->remove('success_schedule');
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
        $updateStatus = $appointmentModel->updateByField('user_id', $id, 'status', 'completed');

        if ($updateStatus) {
            $this->redirect('/client/appointments/' . $auth);
        }
    }

    public function cancel($id){
        $auth = $this->getSession()->get('user_id');
        $appointmentModel = new AppointmentModel($this->getDatabaseConnection());
        $updateStatus = $appointmentModel->updateByField('user_id', $id, 'status', 'canceled');
       
    
        if ($updateStatus) {
            $availabilityModel = new AvailabilityModel($this->getDatabaseConnection());
        }

        $this->redirect('/client/appointments/' . $auth);
    }


    public function destroy($id){
        $auth= $this->getSession()->get('user_id');

        $appointmentModel= new AppointmentModel($this->getDatabaseConnection());

        $deleteAppointment = $appointmentModel->deleteById($id);

       if($deleteAppointment){
        $this->redirect('/client/appointments/'.$auth);
       }

    }




}
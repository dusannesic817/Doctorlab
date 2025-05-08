<?php

namespace App\Controllers;

use App\Core\Role\UserRoleController;
use App\Models\AppointmentModel;


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


    public function create(){

    }

    public function store(){

    }


    public function edit($id){

    }

    public function update($id){

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
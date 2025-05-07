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
        $myclients  = $appointmentModel->getScheduleDoctor($id);
      

        $change=$this->getSession()->get('success_schedule');
        $this->set('change',$change);

        if($this->getSession()->get('role') =='client'){           
            $this->set('schedules',$schedules);
        }elseif($this->getSession()->get('role') =='caregiver'){
            $this->set('myclients', $myclients);

        }
       
    
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
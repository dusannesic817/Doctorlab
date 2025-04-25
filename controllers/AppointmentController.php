<?php

namespace App\Controllers;

use App\Core\Role\UserRoleController;
use App\Models\AppointmentModel;


class AppointmentController extends UserRoleController{

    
    
    public function index(){
        
    }


    public function show($id){

        $appointmentModel = new AppointmentModel($this->getDatabaseConnection());
        $schedules = $appointmentModel->getSchedule($id);

        $change=$this->getSession()->get('success_schedule');
        $this->set('change',$change);
        $this->set('schedules',$schedules);


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

    }

}
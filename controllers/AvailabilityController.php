<?php


namespace App\Controllers;
use App\Core\Role\UserRoleController;


class AvailabilityController extends UserRoleController{


    public function index(){
        
    }


    public function show($id){

    }


    public function create(){
        $timesData = $this->getJson('times.json');

        $months = $this->getMonths();

        $this->set('timesData', $timesData);
        $this->set('months', $months);
    }

    public function store(){

    }


    public function edit($id){

    }

    public function update($id){

    }


    public function destroy($id){

    }


    public function getMonths(){
       
    $currentDate = new \DateTime();
    $currentMonth = $currentDate->format('n'); 
    $months = [];

    for ($month = $currentMonth; $month <= 12; $month++) {
    $months[] = \DateTime::createFromFormat('n', $month)->format('F'); 

    }

    return $months;

    }

}
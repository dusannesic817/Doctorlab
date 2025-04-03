<?php


namespace App\Controllers;
use App\Core\Role\UserRoleController;


class AvailabilityController extends UserRoleController{


    public function index(){
        
    }


    public function show($id){

    }


    public function create() {
        $timesData = $this->getJson('times.json');
        $months = $this->getMonths(); 
        
        // Trenutni mesec kao broj (index)
        $currentMonthIndex = date('n')-4; // Mesec kao broj od 0 (0 = januar)
        $currentMonth = $months[$currentMonthIndex]; // Dohvata naziv trenutnog meseca
        
        // Prosleđivanje podataka u view
        $this->set('timesData', $timesData);
        $this->set('months', $months);
        $this->set('currentMonth', $currentMonth); // Prosledi naziv trenutnog meseca
        $this->set('currentMonthIndex', $currentMonthIndex); // Prosledi index trenutnog meseca
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
<?php


namespace App\Controllers;
use App\Core\Role\UserRoleController;
use App\Models\AvailabilityModel;


class AvailabilityController extends UserRoleController{


    public function index(){
        
    }


    public function show($id){

    }


    public function create() {
        $timesData = $this->getJson('times.json');
        $months = $this->getMonths(); 

        $currentMonth = $months[0] ?? null; 
        $currentMonthIndex = 0;

        $this->set('timesData', $timesData);
        $this->set('months', $months);
        $this->set('currentMonth', $currentMonth);
        $this->set('currentMonthIndex', $currentMonthIndex);
    }


    
    
    public function store(){


        $times = filter_input(INPUT_POST, 'time', FILTER_DEFAULT, FILTER_FORCE_ARRAY);
        $month = filter_input(INPUT_POST,'selected_month');
        $id= $this->getSession()->get('user_id');

        $file=$this->getUserSchedule($month,$times,$id);

        $name= $this->getJson('/schedule'.'/'.$file['filename']);

        $date=[];

        foreach($name['schedule'] as $value){
            $date[]=$value;
        }

        $availabilityModel = new AvailabilityModel($this->getDatabaseConnection());

        $user_id = $availabilityModel->getByFieldName('user_id',$id);

    
        if($user_id !== false){
            $availabilityModel->updateAvailability($id,$date);
        }else{
         $availabilityModel->add([
             'user_id'=>$id,
             'schedule'=>$file['json'],
        ]);
        }

        $this->getSession()->put('success_schedule','Slots has been opened successfully ');
        $this->getSession()->save();

        $this->redirect('/caregiver/appointments/'.$id);
       
    }

    public function edit($id){

    }

    public function update($id){

    }


    public function destroy($id){

    }


    public function getMonths() {
        $months = [];
        $currentMonth = (int)date('n'); 

        for ($month = $currentMonth; $month <= 12; $month++) {
            $months[] = \DateTime::createFromFormat('!m', $month)->format('F');
        }

        return $months;
    }


    public function getUserSchedule($monthName, $times, $userId) {
        $year = date('Y');
        $month = date('n', strtotime($monthName)); 
        
        $schedule = [];
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $timestamp = strtotime("$year-$month-$day");
            $dayOfWeek = date('N', $timestamp); 
            
            if ($dayOfWeek >= 1 && $dayOfWeek <= 5) { 
                $monthFullName = date('F', $timestamp); 
                $dayNum = date('j', $timestamp);        
                $dayName = date('l', $timestamp);       
    
                $timeSlots = [];
                foreach ($times as $time) {
                    $timeSlots[] = [
                        'time' => $time,
                        'status' => 'free'
                    ];
                }
    
                $schedule[] = [
                    'date' => "$monthFullName $dayNum $dayName",
                    'times' => $timeSlots
                ];
            }
        }
    
        $result = [
            'user_id' => $userId,
            'schedule' => $schedule
        ];
        
        $jsonContent = json_encode($result, JSON_PRETTY_PRINT);
        $fileName = $year.'_'.$monthFullName."_user_".$userId.".json";
        $path = 'public/json/schedule/'.$fileName;
    
        if (file_put_contents($path, $jsonContent)) {
            return [
                'filename' => $fileName,
                'json' => $jsonContent
            ];
        }
    
        return false;
    }
    
    
    

}
<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Role\UserRoleController;
use App\Models\AvailabilityModel;
use App\Models\ClinicModel;
use App\Models\UserModel;
use App\Validators\StringValidator;

class CaregiverController extends Controller{


    public function index(){
        
        $caregiver = new AvailabilityModel($this->getDatabaseConnection());
        $data = $caregiver->getCaregiversAvailability();
        $caregivers=$this->caregiverData($data);

        $count=0;
        foreach($caregivers as $value){
           $count++;
        }

        $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);
        $this->set('caregivers', $caregivers);
        $this->set('count', $count);


    }

    public function specificCaregivers(string $title){
        
        $title = ucfirst(strtolower($title)); 
        $caregiver = new AvailabilityModel($this->getDatabaseConnection());
        $data = $caregiver->getCaregiverData($title);
        $caregivers=$this->caregiverData($data);

          $count=0;
        foreach($caregivers as $value){
           $count++;
        }

        $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);
        $this->set('caregivers', $caregivers);
        $this->set('count', $count);
    }

    public function query(){

        $query = trim(filter_input(INPUT_GET, 'query') ?? "");
        $place = trim(filter_input(INPUT_GET, 'place') ?? "");
    
        $caregiverModel = new AvailabilityModel($this->getDatabaseConnection());
        $data = $caregiverModel->searchFlexible($query, $place);  
        $caregivers=$this->caregiverData($data);

        
        $this->set('caregivers', $caregivers);

    }

    public function show($id){
        $user = new UserModel($this->getDatabaseConnection());
        $caregiver = $user->getUser($id);

        if($caregiver->role=='caregiver'){
            $this->set('caregiver',$caregiver);
        }


        #menu
        $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);

    }

    public function create(){

        $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);
    }



    public function store(){


        $userModel = new UserModel($this->getDatabaseConnection());
        
        $forename = filter_input(INPUT_POST,'first_name');
        $surname = filter_input(INPUT_POST,'last_name');
        $email = filter_input(INPUT_POST,'email');
        $date = filter_input(INPUT_POST,'birth');
        $gender = filter_input(INPUT_POST, 'gender');
        $password1 = filter_input(INPUT_POST,'password');
        $password2 = filter_input(INPUT_POST,'retype_password');
       
        
        if($password1 !== $password2){
            $this->set('message','Doslo je do greske: Lozinke se ne poklapaju');
            return;

        }

        $stringValidator = (new StringValidator())->setMinLength(7)->setMaxLength(120);
        if(!$stringValidator->isValid(($password1))){
            $this->set('message','Doslo je do greske: Lozinke nije ispravnog formata');
            return;

        }
        $user = $userModel->getByFieldName('email',$email);
        

        if($user){
            $this->set('message','Doslo je do greske: Email vec postoji');
            return;
        }


        $pass_hash = password_hash($password1, PASSWORD_DEFAULT);

        $user_id=$userModel->add([
            'name'=>$forename,
            'surname'=>$surname,
            'gender'=>$gender,
            'email'=>$email,
            'password_hash'=>$pass_hash,
            'role'=>'caregiver',
            'birth'=>$date,
           
            
        ]);

        if(!$user_id){
            $this->set('message', "Doslo je do greske, neuspela registracija");
            return;
        }


        $this->set("message", "Napravljen je novi nalog");

    }


    public function login(){

    }

    public function authenticate(){

        $email = filter_input(INPUT_POST, 'email_login');
        $password = filter_input(INPUT_POST, 'password_login');


        $userModel = new UserModel($this->getDatabaseConnection());
        $email = $userModel->getByFieldName('email',$email);


        if(!$email){
            $this->set('message','Invalid password or email');
            return;
        }

       $pass=$email->password_hash;

       if(!password_verify($password,$pass)){
        sleep(2);
        $this->set('message','Invalid password or email');
        return;
       }

       $this->getSession()->put('user_id',$email->user_id);
       $this->getSession()->save();

       $this->redirect('/profile');


    }


    public function caregiverData($data){
    
        date_default_timezone_set("Europe/Belgrade");
        $today = new \DateTime();
        $today->setTime(0, 0, 0);  

        $dayOfWeek = $today->format('N');
        if ($dayOfWeek == 6) {
            $today->modify('+2 days'); 
        } elseif ($dayOfWeek == 7) {
            $today->modify('+1 day'); 
        }

        $caregivers = [];

        foreach ($data as $value) {
            $scheduleEntries = [];

            foreach ($value->schedule['schedule'] as $v){
                $dateObj = \DateTime::createFromFormat('F j l', $v['date']);
                
                if ($dateObj) {
                    $dateObj->setTime(0, 0, 0);
                }

                if ($dateObj && $dateObj >= $today) {
                    $scheduleEntries[] = [
                        'original_date' => $v['date'],
                        'date_obj' => $dateObj,
                        'times' => $v['times']
                    ];
                }
            }
            usort($scheduleEntries, function ($a, $b) {
                return $a['date_obj'] <=> $b['date_obj'];
            });

            $sortedSchedule = [];
            foreach ($scheduleEntries as $entry){
                $sortedSchedule[$entry['original_date']] = [
                    'times' => $entry['times']
                ];
            }

            if (!empty($sortedSchedule)){
                $caregivers[] = [
                    'user_id' => $value->user_id,
                    'name' => $value->name,
                    'surname' => $value->surname,
                    'profile_photo' => $value->profile_photo,
                    'cilinic_name'=>$value->clinic_name,
                    'city'=>$value->city,
                    'longitude'=>$value->longitude,
                    'latitude'=>$value->latitude,
                    'clinic_address'=>$value->address,
                    'doctor' => $value->caregiver_data['title'],
                    'schedule' => $sortedSchedule
                ];
            }
        }

        return $caregivers;
    }

   
}
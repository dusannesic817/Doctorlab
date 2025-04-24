<?php

namespace App\Controllers;


use Google\Client;
use Google\Service\Oauth2;
use App\Core\Controller;
use App\Models\UserModel;
use App\Validators\StringValidator;

class UserController extends Controller{


    public function index() {
        // Ako postoji 'code' u URL-u, pozivamo googleAuth funkciju da obradimo prijavu
        if (isset($_GET['code'])) {
            $this->googleAuth();
        } else {
            
            $googleAuth = $this->googleLogIn();
            $this->set('googleAuth', $googleAuth);
        }
    }
    
    public function googleAuth(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        // Proveri da li je 'code' prisutan u URL-u
        if(!isset($_GET['code'])){
            exit("Login failed: 'code' parameter missing.");
        }
    
        $client = new Client();
        $client->setClientId("423354902811-tcfb9qqig2rv27h31gu8raik0n2hu5rr.apps.googleusercontent.com");
        $client->setClientSecret("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");
        $client->setRedirectUri("http://localhost/doctorlab/");
    
        // Dodavanje scope-ova
        $client->addScope("email");
        $client->addScope("profile");
    
        // Dobijanje tokena sa 'code' parametrom
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token['access_token']);
    
        // Dobavi korisničke podatke
        $oauth2 = new Oauth2($client);
        $userInfo = $oauth2->userinfo->get();
    
        /*var_dump($userInfo->givenName, $userInfo->familyName, $userInfo->email);
        exit();*/
    
        // Proveri da li korisnik postoji u bazi
        $userModel = new UserModel($this->getDatabaseConnection());
        $client_email = $userInfo->email;
        $user = $userModel->getByFieldName('email', $client_email);

    
        // Ako korisnik ne postoji, dodaj ga u bazu
        if ($user) {
            
        $this->getSession()->put('user_id',$user->user_id);
        $this->getSession()->put('role',$user->role);
        $this->getSession()->save();
        $auth = $this->getSession()->get('user_id');

        var_dump($auth);
        exit();
        
        $this->redirect('/client/appointmens/'.$auth);
        exit();
           
        }



        $userModel->add([
            'name' => $userInfo->given_name,
            'surname' => $userInfo->family_name,
            'email' => $userInfo->email,
        ]);

        
        $this->redirect('/');
    }
    
    
    

    public function show($id){
       
    }

   public function create(){


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
            'role'=>'client',
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
        $email = $userModel->getByFieldName('email', $email);
    
        if (!$email) {
            $this->set('message', 'Invalid password or email');
            return;
        }
    
        $pass = $email->password_hash;
    
        if (!password_verify($password, $pass)) {
            sleep(2);
            $this->set('message', 'Invalid password or email');
            return;
        }
    
        $this->getSession()->put('user_id', $email->user_id);
        $this->getSession()->save();
        $this->getSession()->put('role', $email->role);
        $this->getSession()->save();
    
       $redirect = $this->getSession()->get('post_login_redirect');
        
        if ($redirect) {
        $this->getSession()->remove('post_login_redirect');
        $this->getSession()->save();
    
        $this->redirect($redirect);
       
        }
      
        if ($email->role == 'client') {
            sleep(2);
            $this->redirect('/client/appointments/' . $email->user_id);
        } else {
            sleep(2);
            $this->redirect('/caregiver/appointments/' . $email->user_id);
        }
    }
    


   public function logout(){

    if($this->getSession()->clear())
      
    $this->redirect('/');

    }




    public function googleLogIn() {
        /*$token = $this->getSession()->get('access_token');
    
        if (isset($token)) {
            // Token postoji, korisnik je već prijavljen
            $client = new Client();
            $client->setClientId("423354902811-tcfb9qqig2rv27h31gu8raik0n2hu5rr.apps.googleusercontent.com");
            $client->setClientSecret("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");
            $client->setAccessToken($token);
    
            $oauth2 = new Oauth2($client);
            $userInfo = $oauth2->userinfo->get();  
    
            // Spremi podatke u sesiju
            $this->getSession()->put("user", [
                'name' => $userInfo->name,
                'surname' => $userInfo->surname,
                'email' => $userInfo->email,
            ]);
            
            $this->getSession()->save();
    
            // Redirektuj korisnika na početnu stranicu ili dashboard
            $this->redirect("/");
            exit;
        }*/
    
        // Generiši URL za Google login
        $client = new Client();
        $client->setClientId("423354902811-tcfb9qqig2rv27h31gu8raik0n2hu5rr.apps.googleusercontent.com");
        $client->setClientSecret("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");
        $client->setRedirectUri("http://localhost/doctorlab/");
        $client->addScope("email");
        $client->addScope("profile");
    
        return $client->createAuthUrl();
    }
    




      /*  if (isset($_GET['code'])) {
            $client = new Client();
            $client->setClientId("423354902811-tcfb9qqig2rv27h31gu8raik0n2hu5rr.apps.googleusercontent.com");
            $client->setClientSecret("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");
            $client->setRedirectUri("http://localhost/doctorlab/");
    
            // Dodavanje scope-ova
            $client->addScope("email");
            $client->addScope("profile");
            //$client->addScope("https://www.googleapis.com/auth/userinfo.profile");
            //$client->addScope("https://www.googleapis.com/auth/userinfo.phone");
    
            // Dobijanje tokena
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $client->setAccessToken($token);
    
            // Spremi token u sesiju
            $this->getSession()->put('access_token', $token['access_token']);
            $this->getSession()->save();
    
            // Dobavi korisničke podatke
            $oauth2 = new Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
    
            // Proveri da li korisnik već postoji u bazi
            $userModel = new UserModel($this->getDatabaseConnection());
            $client_email = $userInfo->email; // Koristi korisnikov email
            $user = $userModel->getByFieldName('email', $client_email);
            
            if (!$user) {
                // Ako korisnik ne postoji, dodaj ga u bazu
                $phone = isset($userInfo->phoneNumber) ? $userInfo->phoneNumber : null;
                $birth = isset($userInfo->birthday) ? $userInfo->birthday : null;
    
                $userModel->add([
                    'name' => $userInfo->givenName,
                    'surname' => $userInfo->familyName,
                    'email' => $userInfo->email,
                    
                ]);
            }
    
            // Preusmeri korisnika
            $this->redirect("/");
            exit;
        } else {
            echo "Google autentifikacija nije uspela!";
        }*/


        
}
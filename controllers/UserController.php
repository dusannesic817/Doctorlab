<?php

namespace App\Controllers;


use App\Models\TokenModel;
use Google\Client;
use Google\Service\Oauth2;
use App\Core\Controller;
use App\Models\UserModel;
use App\Validators\NumberValidator;
use App\Validators\StringValidator;
use App\Services\MailService;
use Configruation;

class UserController extends Controller{


    public function index() {

        $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);
      
        if (isset($_GET['code'])) {
            $this->googleAuth();
        } else {
            
            $googleAuth = $this->googleLogIn();
            $this->set('googleAuth', $googleAuth);
        }
    }
    
    public function googleAuth() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_GET['code'])) {
            exit("Login failed: 'code' parameter missing.");
        }

        $client = $this->getGoogleClient();

        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        if (isset($token['error'])) {
            exit("Failed to get access token: " . htmlspecialchars($token['error']));
        }
        $client->setAccessToken($token['access_token']);

        $oauth2 = new Oauth2($client);
        $userInfo = $oauth2->userinfo->get();

        $userModel = new UserModel($this->getDatabaseConnection());
        $user = $userModel->getByFieldName('email', $userInfo->email);

        if (!$user) {
            $userModel->add([
                'name' => $userInfo->given_name,
                'surname' => $userInfo->family_name,
                'email' => $userInfo->email,
            ]);
            $user = $userModel->getByFieldName('email', $userInfo->email);
        }

        $this->getSession()->put('user_id', $user->user_id);
        $this->getSession()->put('role', $user->role ?? 'user');
        $this->getSession()->save();

        $this->redirect('/client/appointments/' . $user->user_id);
        exit();
    }

    

    public function show($id){
       
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
            $this->set('message',"The password doesn't match.");
            return;

        }

        $stringValidator = (new StringValidator())->setMinLength(7)->setMaxLength(30)->firstCharUpper();
        //$numberValidator = (new NumberValidator())->setMustContainDigit();
       
        if (!$stringValidator->isValid($password1)){
            $this->set('message', 'Your password must be 8-30 characters long, with an uppercase letter and contain numbers.');
            return;
        }

        $user = $userModel->getByFieldName('email',$email);
        

        if($user){
            $this->set('messageEmail','Email already exist.');
            return;
        }

        $token = bin2hex(random_bytes(16));
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
        $tokenModel = new TokenModel($this->getDatabaseConnection());
        $tokenModel->add([
            'user_id'=>$user_id,
            'token'=>$token,
            'type'=>'verify_email',
            'expires_at' => date('Y-m-d H:i:s', strtotime('+1 day')),
        ]);

        $mailer = new MailService();
        $addres = Configruation::BASE_URL."/confirm/$token";
        $mailer->sendMail($email,'Confirm mail',$addres);
       

        $this->getSession()->put('successRegistration',"Thank you, you will get confirmation link, check your email address.");
        $this->getSession()->save();
        $this->redirect('/');

   }

    public function login(){
         $successReset=$this->getSession()->get('successReset');
         if($successReset){
              $this->set('successReset',$successReset);
         }

        $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);
        $this->getSession()->remove('successReset');
         
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
        $user_id = $email->user_id;
        $tokenModel = new TokenModel($this->getDatabaseConnection());
        $token=$tokenModel->isVerified($user_id);

        $is_verified = $token->is_used;
        
       /* if($is_verified==false){
            $this->set('message', 'Invalid password or email');
            return;
        }*/
    
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
        return $this->getGoogleClient()->createAuthUrl();
    }

    private function getGoogleClient() {
        $client = new Client();
        $client->setClientId(Configruation::GOOGLE_CLIENT_ID);
        $client->setClientSecret(Configruation::GOGLE_CLIENT_SECRET);
        $client->setRedirectUri("http://localhost/doctorlab/googleauth");
        $client->addScope("email");
        $client->addScope("profile");
        return $client;
    }

    public function forgotPassword(){

        
    }

    public function resetPassword(){

        $email = filter_input(INPUT_POST, 'email_reset', FILTER_VALIDATE_EMAIL);
        $userModel = new UserModel($this->getDatabaseConnection());
        $user = $userModel->getByFieldName('email', $email);
        $user_id= $user->user_id;

        if (!$user) {
            $this->set('errorReset',"Email doesn't exist.");
            return;
        }

         $token_reset = bin2hex(random_bytes(16));

         $tokenModel = new TokenModel($this->getDatabaseConnection());
         $tokenModel->add([
            'user_id'=>$user_id,
            'token'=>$token_reset,
            'type'=>'forgot_password',
            'expires_at' => date('Y-m-d H:i:s', strtotime('+1 day')),

         ]);

        $mailer = new MailService();
        $addres = Configruation::BASE_URL."/resetform/$token_reset";
        $mailer->sendMail($email,'Reset Password',$addres);
       

    }
    public function reset(){

    }

    public function confirmReset(){

        $token = $this->getSession()->get('token');
        
        $tokenModel = new TokenModel($this->getDatabaseConnection()); 
        $token_obj = $tokenModel->findByToken($token);

        if (!$token_obj || $token_obj->is_used==1 || $token_obj->expires_at <= date('Y-m-d H:i:s')){
            $this->set('message', 'Token is invalid or has expired.');
            return;
        }

        $user_id = $token_obj->user_id;

        $userModel= new UserModel($this->getDatabaseConnection());
        $user= $userModel->getById($user_id);

        $password = filter_input(INPUT_POST,'password_reset');
        $password1 = filter_input(INPUT_POST,'password_reset1');

        if($password!== $password1){
            $this->set("message","The password doesn't match.");
            return;
        }
        $stringValidator = (new StringValidator())->setMinLength(7)->setMaxLength(30)->firstCharUpper();
       
       
        if (!$stringValidator->isValid($password1)){
            $this->set('message', 'Your password must be 8-30 characters long, with an uppercase letter and contain numbers.');
            return;
        }

        $password_hash=password_hash($password, PASSWORD_DEFAULT);

        $data=$userModel->editById($user_id,[
            'password_hash'=>$password_hash
        ]);

        if($data){
            $tokenModel->verifyUser($token);
        }

        $this->getSession()->remove('token');
        $this->getSession()->save();
       
        $this->getSession()->put('successReset','Successfully reset your password');
        $this->redirect('/user/login');
       

    }


        
}
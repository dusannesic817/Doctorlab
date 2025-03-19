<?php

namespace App\Core\Session;

final class Session{

    private $sessionStorage;
    private $sessionData;
    private $sessionId;
    private $sessionLife;


    public function __construct(SessionStorage $sesionStorage,$sessionLife=1800){
        $this->sessionStorage = $sesionStorage;
        $this->sessionData = [];
        $this->sessionLife=$sessionLife;
        $this->sessionId = preg_replace('|[^A-Za-z0-9]|', '', filter_input(INPUT_COOKIE, "APPSESSION") ?? '');


        if(strlen($this->sessionId) !== 32){
            $this->sessionId = $this->generateSessionId();
            setcookie('APPSESSION', $this->sessionId, time() + $this->sessionLife, '/', '', false, true);


        }
        $this->relaoad();
    }

    private function generateSessionId(){
        $supported =  "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $id = '';
        for($i=0; $i<32; $i++){
            $id.= $supported[rand(0, strlen($supported)-1)];
        }

        return $id;

    }

    public function put($key, $value){
        $this->sessionData[$key] = $value;

    }

    public function get(string $key, $default=null){
        return $this->sessionData[$key] ?? $default;
    }

    public function clear(){
        $this->sessionData=[];
    }
    public function remove(string $key){
        if ($this->exists($key)) {
            unset($this->sessionData[$key]);
        }
    }
    public function exists(string $key): bool{
       return isset($this->sessionData[$key]);
    }

    public function has($key){
        if(!$this->exists($key)){
            return false;
        }

        return boolval($this->sessionData[$key]);

    }

    public function save(){
        $jsonData = json_encode($this->sessionData);
        $this->sessionStorage->save($this->sessionId,$jsonData);
        setcookie('APPSESSION', $this->sessionId, time()+$this->sessionLife);
    }

    public function relaoad(){
        $jsonData = $this->sessionStorage->load($this->sessionId);
        $restoreData = json_decode($jsonData, true);  
        if(!$restoreData){
            $this->sessionData = [];  
        } else {
            $this->sessionData = $restoreData;  
        }
    }
    

    public function regenerate(){
        $this->relaoad();
        $this->sessionStorage->delete($this->sessionId);

        $this->sessionId=$this->generateSessionId();
        $this->save();

        setcookie('APPSESSION', $this->sessionId, time()+$this->sessionLife);

    }





}
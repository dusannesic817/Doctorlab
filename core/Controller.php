<?php

namespace App\Core;

class Controller{
    private $dbc;
    private  $session;
    private $data = [];


    public function __pre(){
        
    }

    final public function __construct(DatabaseConnection $dbc) {
        $this->dbc=$dbc;
    }



    public function &getDatabaseConnection(){
        return $this->dbc;
    }

    public function &getSession(): \App\Core\Session\Session {
        return $this->session;
    }

    public function setSession(\App\Core\Session\Session &$session){
        $this->session=$session;
    }


    final protected function set($name,$value){

        $result = false;

        if(preg_match('/^[a-z][a-z0-9]+(?:[A-Z][a-z0-9]+)*$/',$name)){
            $this->data[$name] = $value;
            $result=true;
        }

        return $result;
        
    }

    final public function getData(){
        return $this->data;
    }

    protected function redirect($path,$code = 307){
        ob_clean();
        header('Location: '. $path,true,$code);
        exit();
    }

}
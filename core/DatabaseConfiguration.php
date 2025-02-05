<?php

namespace App\Core;

class DatabaseConfiguration{
    private $host;
    private $name;
    private $user;
    private $password;

    public function __construct(string $host, string $user, string $password, string $name){

        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
        $this->user = $user;
        
    }

    public function getSource(){
        return "mysql:host={$this->host};dbname={$this->name};charset=utf8";
    }

    public function getUser(){
        return $this->user;
    }

    public function getPassword(){
        return $this->password;
    }
}
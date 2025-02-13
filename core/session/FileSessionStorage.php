<?php

namespace App\Core\Session;

class FileSessionStorage implements SessionStorage{

    private $sesionPath;

    public function __construct($sesionPath){
        $this->sesionPath = $sesionPath;
    }

    public function save(string $sessionId, string $sessionData){
        $sesionFileName = $this->sesionPath . $sessionId . '.json';
        file_put_contents($sesionFileName, $sessionData);
    }

    public function load(string $sessionId){
        $sesionFileName = $this->sesionPath . $sessionId. '.json';
        if(!file_exists($sesionFileName)){
            return '{}';
        }

        return file_get_contents($sesionFileName);

    }
    public function delete(string $sessionId){
        $sesionFileName = $this->sesionPath . $sessionId. '.json';
        if(file_exists($sesionFileName)){
           unlink($sesionFileName);
        }

    }
    public function cleanUp(int $sessionAge){
        //todo
    }
}
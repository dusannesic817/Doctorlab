<?php

namespace App\Core;
use \PDO;

class DatabaseConnection{

    private $configuration;
    private $connection;

    public function __construct(DatabaseConfiguration $configuration){
        $this->configuration = $configuration;
    }

    public function getConnection(){

        if($this->connection==null){
            $this->connection= new \PDO(
                $this->configuration->getSource(),
                $this->configuration->getUser(),
                $this->configuration->getPassword()

            );
        }
        return $this->connection;
    }

}
<?php

namespace App\Core;
use \PDO;
use App\Core\DatabaseConnection;

abstract class Model{
    
    private $dbc;

    final public function __construct(DatabaseConnection &$dbc){
        $this->dbc = $dbc;
    }

    protected function getConnection(){
        return $this->dbc->getConnection();
    }

    private function getTableName(){
        $fullName = static::class;
        $matches=[];

        preg_match('|^.*\\\((?:[A-Z][a-z]+)+)Model$|',$fullName,$matches);
        $className = $matches[1] ?? '';
        #UserProfile
        $underScoredClassName = preg_replace('|[A-Z]|','_$0',$className);
        #_User_Profile
        $loverCase =strtolower($underScoredClassName);
        #_user_profile
        return substr($loverCase,1);
    }

     private function getPrimaryKeyName(){
        return $this->getTableName(). "_id";
    }

    final public function getById(int $id) {
       
        $sql = "SELECT * FROM " . $this->getTableName() . " WHERE " . $this->getPrimaryKeyName() . " = ?";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

        $category = NULL;

        if ($res) {
            $category = $prep->fetch(PDO::FETCH_OBJ);
        }
        return $category;
    }
    

    final public function getAll(){
        $sql = "SELECT * FROM ".$this->getTableName();
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();

        $categories = [];

        if($res){
            $categories= $prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $categories;

    }

    private function isFieldNameValid($fieldName){  
        return boolval(preg_match('|^[a-z][a-z_0-9]+[a-z0-9]$|',$fieldName));
    }


    final public function getByFieldName(string $fieldName,$value){
        if(!$this->isFieldNameValid($fieldName)){
            throw new \Exception('Invalid field name'. $fieldName);

        }
        $sql = "SELECT * FROM " .$this->getTableName()." WHERE ".$fieldName." = ?;";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$value]);

        $item = NULL;

        if($res){
            $item= $prep->fetch(PDO::FETCH_OBJ);
        }
        return $item;
    }

    final public function getAllByFieldName(string $fieldName,$value){
        if(!$this->isFieldNameValid($fieldName)){
            throw new \Exception('Invalid field name'. $fieldName);

        }
        $sql = "SELECT * FROM " .$this->getTableName()." WHERE ".$fieldName." = ?;";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$value]);

        $items = [];

        if($res){
            $items= $prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $items;
    }

    

}
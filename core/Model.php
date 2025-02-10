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

    protected function getFields(){
        return [];
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


    final public function add(array $data){
        # da li se unutar kljuceva $data asoc niza nalaze samo ona imena polja koja poste u ovoj nasoj tabeli, u spisku polja naseg modela
        $fields =  $this->getFields();

        $supportedFieldsNames = array_keys($fields);
        $requestedFieldNames = array_keys($data);

        foreach($requestedFieldNames as $value){
            if(!in_array($value,$supportedFieldsNames)){
                throw new \Exception("Field is not supported ". $value);
            }
        # da li je vrednost u $data asoc nizu za dati kljuc odgovarajuca prema reg izrazu
            if(!$fields[$value]->isEditable()){
                throw new \Exception("File is not editable ". $value);
            }

            if(!$fields[$value]->isValid($data[$value])){
                throw new \Exception("The value for the field is not valid ". $value);
            }


        }
        # Priprema INSER INTO ...
        $sqlFieldNames = implode(', ' ,$requestedFieldNames);
        $questionMarks = str_repeat('?, ', count($data));
        $questionMarks = substr($questionMarks,0,-1);

        $sql = "INSERT INTO {$this->getTableName()}  ({$sqlFieldNames}) VALUES (?,?,?)";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $result = $prep->execute(array_values($data));

        if(!$result){
            return false;
        }

        return $this->dbc->getConnection()->lastInsertId();


     



    }


}
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

        $item = NULL;

        if ($res) {
            $item = $prep->fetch(PDO::FETCH_OBJ);
        }
        return $item;
    }
    

    final public function getAll(){
        $sql = "SELECT * FROM ".$this->getTableName();
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();

        $items = [];

        if($res){
            $items= $prep->fetchAll(PDO::FETCH_OBJ);
        }
        return $items;

    }

    /*private function isFieldNameValid(string $fieldName){  
        return boolval(preg_match('|^[a-z][a-z_0-9]+[a-z0-9]$|',$fieldName));
    }*/

    private function isFieldValueValid($fieldName, $fieldValue){
        $fields = $this->getFields();
        $supportedFieldsNames = array_keys($fields);

        if(!in_array($fieldName, $supportedFieldsNames)){
            return false;
        }

        return $fields[$fieldName]->isValid($fieldValue);
    }


    final public function getByFieldName(string $fieldName,$value){
        if(!$this->isFieldValueValid($fieldName,$value)){
            throw new \Exception('Invalid field name or value '. $fieldName);

        }
        $sql = "SELECT * FROM " .$this->getTableName()." WHERE `" . $fieldName . "` = ?;";

        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$value]);

        $item = NULL;

        if($res){
            $item= $prep->fetch(PDO::FETCH_OBJ);
        }
        return $item;
    }

    final public function getAllByFieldName(string $fieldName, $value) {
        if (!$this->isFieldValueValid($fieldName, $value)) {
            throw new \Exception('Invalid field name: ' . $fieldName);
        }
    
        $sql = "SELECT * FROM " . $this->getTableName() . " WHERE `" . $fieldName . "` = ?;";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $prep->execute([$value]);
    
        $items = $prep->fetchAll(PDO::FETCH_OBJ);
    
        return $items;
    }
    
//prepakovati
private function checkFields($data) {

    $fields = $this->getFields();

    $supportedFieldsNames = array_keys($fields);
    $requestedFieldNames = array_keys($data);


    foreach ($requestedFieldNames as $value) {
        if (!in_array($value, $supportedFieldsNames)) {
            throw new \Exception("Field is not supported " . $value);
        }

        if (!$fields[$value]->isEditable()) {
            throw new \Exception("File is not editable " . $value);
        }

        if (!$fields[$value]->isValid($data[$value])) {
            throw new \Exception("The value for the field is not valid " . $value);
        }
    }
}



    final public function add(array $data) {
        //Provera da li su polja validna
        $this->checkFields($data);
    
        //Priprema polja 
        $sqlFieldNames = implode(', ', array_keys($data));
        $questionMarks = rtrim(str_repeat('?, ', count($data)), ', '); 
    
       
        $sql = "INSERT INTO {$this->getTableName()} ({$sqlFieldNames}) VALUES ({$questionMarks})";
        
        $prep = $this->dbc->getConnection()->prepare($sql);
        $result = $prep->execute(array_values($data));
    
        if (!$result) {
            return false;
        }
    
        return $this->dbc->getConnection()->lastInsertId();
    }
    

    final public function editById(int $id, array $data){

        $this->checkFields($data);

        $editList = [];
        $values=[];

        foreach($data as $key => $value){
            $editList[]="{$key}=?";
            $values[]=$value;
        }

        $editList = implode(', ', $editList);

        $values[]=$id;

        $sql = "UPDATE {$this->getTableName()} SET {$editList} WHERE {$this->getTableName()}_id=?";
        $prep = $this->dbc->getConnection()->prepare($sql);
        return $prep -> execute($values);
    }

    public function updateByField(string $field, int $id, string $columnToUpdate, $newValue): bool {
        
        $sql = "UPDATE " . $this->getTableName() . " SET $columnToUpdate = ? WHERE $field = ?";
        $prep = $this->dbc->getConnection()->prepare($sql);
        return $prep->execute([$newValue, $id]);
    }


    final public function deleteById(int $id) {
       
        $sql = "DELETE FROM " . $this->getTableName() . " WHERE " . $this->getPrimaryKeyName() . " = ?";
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);

        $item = NULL;

        if ($res) {
            $item = $prep->fetch(PDO::FETCH_OBJ);
        }
        return $item;
    }

    final public function deleteByField(string $field, int $id): bool {
        $sql = "DELETE FROM " . $this->getTableName() . " WHERE $field = ?";
        $prep = $this->dbc->getConnection()->prepare($sql);
        return $prep->execute([$id]);
    }
    
}
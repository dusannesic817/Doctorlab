<?php

namespace App\Core;
use App\Core\Validator;

final class Field {

    private Validator $validator;
    private $editable;

    public function __construct(Validator $validator,$editable=true){
        $this->validator = $validator;
        $this->editable = $editable;
    }

    public function isValid($value){
        return $this->validator->isValid($value);
    }

    public function isEditable(){
        return $this->editable;
    }
}
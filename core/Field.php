<?php

namespace App\Core;

final class Field {

    private $pattern;
    private $editable;

    public function __construct($pattern,$editable){
        $this->pattern = $pattern;
        $this->editable = $editable;
    }

    public function isValid($value){
        return preg_match($this->pattern, $value);
    }

    public function isEditable(){
        return $this->editable;
    }
}
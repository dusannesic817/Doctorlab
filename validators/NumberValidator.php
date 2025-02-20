<?php

namespace App\Validators;

use App\Core\Validator;

class NumberValidator implements Validator{

    private $isSigned;
    private $integerLenght;
    private $isReal;
    private $maxDecimalDigits;


    public function __construct(){
        $this->isSigned=false;
        $this->isReal = false;
        $this->integerLenght = 10;
        $this->maxDecimalDigits=0;
    }


    public function &setInteger(): NumberValidator{
        $this->isReal=false;
        return $this;
    }

    public function &setDecimal(): NumberValidator{
        $this->isReal=true;
        return $this;
    }

    public function &setSigned(): NumberValidator{
        $this->isSigned=true;
        return $this;
    }

    public function &setUnsigned(): NumberValidator{
        $this->isReal=false;
        return $this;
    }
    public function &setIntegerLength($length): NumberValidator{
        $this->integerLenght= max(1,$length);
        return $this;
    }

    public function &setMaxDecimalDigits($maxDigits): NumberValidator{
        $this->maxDecimalDigits=max(0,$maxDigits);
        return $this;
    }


    public function isValid($value): bool{
        $pattern = '/^';

        if($this->isSigned ===true){
            $pattern .='\-?';
        }

        $pattern .= '[1-9][0-9]{0,'. ($this->integerLenght-1). '}';

        if ($this->isReal === true){
            $pattern .= '\.[0-9]{0,' . $this->maxDecimalDigits. '}';
        }

        $pattern.='$/';

        return \boolval(preg_match($pattern,$value));
    }
}
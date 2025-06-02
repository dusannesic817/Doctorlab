<?php

namespace App\Validators;

use App\Core\Validator;

class NumberValidator implements Validator {

    private bool $isSigned;
    private int $integerLenght;
    private bool $isReal;
    private int $maxDecimalDigits;
    private bool $mustContainDigit;
     private bool $allowNull = false;  

    public function __construct() {
        $this->isSigned = false;
        $this->isReal = false;
        $this->integerLenght = 10;
        $this->maxDecimalDigits = 0;
        $this->mustContainDigit = false;
    }

    public function &setInteger(): NumberValidator {
        $this->isReal = false;
        return $this;
    }

    public function &setDecimal(): NumberValidator {
        $this->isReal = true;
        return $this;
    }

    public function &setSigned(): NumberValidator {
        $this->isSigned = true;
        return $this;
    }

    public function &setUnsigned(): NumberValidator {
        $this->isSigned = false;
        return $this;
    }

    public function &setIntegerLength($length): NumberValidator {
        $this->integerLenght = max(1, $length);
        return $this;
    }

    public function &setMaxDecimalDigits($maxDigits): NumberValidator {
        $this->maxDecimalDigits = max(0, $maxDigits);
        return $this;
    }

    public function &setMustContainDigit(): NumberValidator {
        $this->mustContainDigit = true;
        return $this;
    }



   public function &canBeNull(): NumberValidator {
        $this->allowNull = true;
        return $this;
    }

    public function isValid($value): bool {
        // Ako je dozvoljen null i vrednost je null, validno je
        if ($this->allowNull && $value === null) {
            return true;
        }

        if ($this->mustContainDigit && !preg_match('/[0-9]/', $value)) {
            return false;
        }

        $pattern = '/^';

        if ($this->isSigned === true) {
            $pattern .= '\-?';
        }

        $pattern .= '[1-9][0-9]{0,' . ($this->integerLenght - 1) . '}';

        if ($this->isReal === true) {
            $pattern .= '\.[0-9]{0,' . $this->maxDecimalDigits . '}';
        }

        $pattern .= '$/';

        return \boolval(preg_match($pattern, $value));
    }
}

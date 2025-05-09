<?php

namespace App\Validators;

use App\Core\Validator;

class StringValidator implements Validator {

    private $minLength;
    private $maxLength;
    private $checkFirstUpper = false;

    public function __construct() {
        $this->minLength = 0;
        $this->maxLength = 255;
    }

    public function &setMinLength($length): StringValidator {
        $this->minLength = max(0, $length);
        return $this;
    }

    public function &setMaxLength($length): StringValidator {
        $this->maxLength = max(1, $length);
        return $this;
    }

    public function &firstCharUpper(): StringValidator {
        $this->checkFirstUpper = true;
        return $this;
    }

    public function isValid($value): bool {
        $len = strlen($value);

        if ($this->checkFirstUpper && !preg_match('/[A-Z]/', $value)) {
        return false;
        }

        return $this->minLength <= $len && $len <= $this->maxLength;
    }
}

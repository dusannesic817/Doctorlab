<?php

namespace App\Validators;

use App\Core\Validator;

class JSONValidator implements Validator {

    public function __construct() {
    }

    public function isValid($value): bool {
        return \is_string($value) && \json_decode($value) !== null && \json_last_error() === JSON_ERROR_NONE;
    }
}
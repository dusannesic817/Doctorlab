<?php

namespace App\Core;

interface Validator{
    public function isValid($value):bool;
}
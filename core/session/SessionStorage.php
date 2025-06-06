<?php

namespace App\Core\Session;

interface SessionStorage{

    public function save(string $sessionId, string $sessionData);
    public function load(string $sessionId);
    public function delete(string $sessionId);
    public function cleanUp(int $sessionAge);

}
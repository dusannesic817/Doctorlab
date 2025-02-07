<?php

require 'vendor/autoload.php';
require_once 'Configruation.php';

use App\Controllers\MainController;
use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;


$databaseConfig= new DatabaseConfiguration(
   Configruation::DATABASE_HOST,
   Configruation::DATABASE_USER,
   Configruation::DATABASE_PASS,
   Configruation::DATABASE_NAME
);
$databaseConnection = new DatabaseConnection($databaseConfig);


$controller = new MainController($databaseConnection);
$controller->home();
$data= $controller->getData();

foreach ($data as $name => $value) {
   $$name = $value;
}

require_once 'views/Main/home.php';




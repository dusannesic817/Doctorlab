<?php

require 'vendor/autoload.php';
require_once 'Configruation.php';

use App\Controllers\MainController;
use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Core\Router;


$databaseConfig= new DatabaseConfiguration(
   Configruation::DATABASE_HOST,
   Configruation::DATABASE_USER,
   Configruation::DATABASE_PASS,
   Configruation::DATABASE_NAME
);
$databaseConnection = new DatabaseConnection($databaseConfig);

$url = strval(filter_input(INPUT_GET,'URL'));

$httpMethod = filter_input(INPUT_SERVER,'REQUEST_METHOD');

$router = new Router();
$routes = require_once 'Routes.php';

foreach($routes as $route){
   $router->add($route);
}

$route = $router->find($httpMethod,$url);
$arguments = $route->extractArguments($url);


$fullControllerName = '\\App\\Controllers\\'. $route->getControllerName(). 'Controller';

$controller = new $fullControllerName($databaseConnection);
call_user_func_array([$controller,$route->getMethodName()],$arguments);
$data = $controller->getData();

foreach ($data as $name => $value) {
   $$name = $value;
}

require_once 'views/' . $route->getControllerName(). '/'.$route->getMethodName().'.php';




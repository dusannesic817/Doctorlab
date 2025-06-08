   <?php

   require 'vendor/autoload.php';
   require_once 'Configruation.php';

   use App\Core\DatabaseConfiguration;
   use App\Core\DatabaseConnection;
   use App\Core\Router;
   use App\Core\Session\FileSessionStorage;
   use App\Core\Session\Session;
   use App\Services\TwigService;


   $databaseConfig = new DatabaseConfiguration(
      Configruation::DATABASE_HOST,
      Configruation::DATABASE_USER,
      Configruation::DATABASE_PASS,
      Configruation::DATABASE_NAME
   );
   $databaseConnection = new DatabaseConnection($databaseConfig);


   $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
   $scriptName = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
   $url = ltrim(str_replace($scriptName, '', $requestUri), '/');


   $httpMethod = $_SERVER['REQUEST_METHOD'];


   $router = new Router();
   $routes = require_once 'Routes.php';
   foreach ($routes as $route) {
      $router->add($route);
   }


   $route = $router->find($httpMethod, $url);
   $arguments = $route->extractArguments($url);

   $fullControllerName = '\\App\\Controllers\\' . $route->getControllerName() . 'Controller';
   $controller = new $fullControllerName($databaseConnection);


   $sessionStorageConstructorArguments = Configruation::SESSION_STORAGE_DATA;
   $sessionStorage = new FileSessionStorage(...$sessionStorageConstructorArguments);
   $session = new Session($sessionStorage, Configruation::SESSION_LIFETIME);
   $controller->setSession($session);
   $controller->getSession()->relaoad();
   $controller->__pre();


   call_user_func_array([$controller, $route->getMethodName()], $arguments);


   $controller->getSession()->save();
   $data = $controller->getData();

   $twig = TwigService::getTwig($controller);
   if (!str_starts_with($route->getControllerName(), 'Api')) {
      $html = $twig->render(
         $route->getControllerName() . '/' . $route->getMethodName() . '.html',
         $data
      );
      echo $html;
   }

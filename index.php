<?php

require 'vendor/autoload.php';

use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Models\CategoryModel;
use App\Models\UserModel;

$databaseConfig= new DatabaseConfiguration('localhost','root','12345678','auction');
$databaseConnection = new DatabaseConnection($databaseConfig);

$userModel = new UserModel($databaseConnection);


$user = $userModel->getById(2);

$message= "Korisnik ne postoji";

if($user){
   $message= print_r($user,true);
}

echo $message;

$category = new CategoryModel($databaseConnection);
$categories = $category->getAll();

print_r($categories);
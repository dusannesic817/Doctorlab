<?php

return [

    App\Core\Route::get('|^user/register/?$|', "User", 'create'),
    App\Core\Route::post('|^user/register/?$|', "User", "store" ),
    App\Core\Route::get('|^user/login/?$|', "User", 'login'),
    App\Core\Route::get('|^user/profile/?$|', "User", 'index'),
    App\Core\Route::post('|^user/login/?$|', "User", "authenticate" ),


    App\Core\Route::get('|^profile/?$|', "Profile", 'index'),

    App\Core\Route::get('|^category/([0-9+])/?$|','Category','show'),
    App\Core\Route::get('|^auction/([0-9+])/?$|','Auction','show'),



    #User role routes:
    App\Core\Route::get('|^profile/?$|', "Profile", 'index'),
   

    App\Core\Route::any('|^.*$|', 'Main', 'home'),


];
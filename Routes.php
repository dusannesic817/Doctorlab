<?php

return [
    #User
    App\Core\Route::get('|^user/register/?$|', "User", 'create'),
    App\Core\Route::post('|^user/register/?$|', "User", "store" ),
    App\Core\Route::get('|^user/login/?$|', "User", 'login'),
    App\Core\Route::get('|^login/?$|', "User", 'index'),
    App\Core\Route::post('|^user/login/?$|', "User", "authenticate" ),
   

    #Caregiver
    App\Core\Route::get('|^caregiver/register/?$|', "Caregiver", 'create'),
    App\Core\Route::post('|^caregiver/register/?$|', "Caregiver", "store" ),
    App\Core\Route::get('|^caregiver/show/([0-9+])/?$|', "Caregiver", "show"),

    App\Core\Route::get('|^category/([0-9+])/?$|','Category','show'),
    App\Core\Route::get('|^auction/([0-9+])/?$|','Auction','show'),

    

    #UserProfile
    App\Core\Route::get('|^client/profile/([0-9+])/?$|', "UserProfile", 'show'),
    App\Core\Route::post('|^client/update/([0-9+])/?$|', "UserProfile", 'update'),
    App\Core\Route::get('|^client/logout/?$|', "UserProfile", 'logout'),


    #Appointement routes:
    App\Core\Route::get('|^client/appointmens/([0-9+])/?$|', "Appointment", 'show'),
    App\Core\Route::get('|^caregiver/appointmens/([0-9+])/?$|', "Appointment", 'show'),


    #CaregiverProfie
    App\Core\Route::get('|^caregiver/profile/([0-9+])/?$|', "CaregiverProfile", 'show'),
    App\Core\Route::get('|^caregiver/edit/([0-9+])/?$|', "CaregiverProfile", 'edit'),
    App\Core\Route::post('|^caregiver/update/([0-9+])/?$|', "CaregiverProfile", 'update'),
    App\Core\Route::get('|^caregiver/appointmens/?$|', "CaregiverProfile", 'appointmens'),
    App\Core\Route::get('|^caregiver/logout/?$|', "CaregiverProfile", 'logout'),
    
   

    App\Core\Route::any('|^.*$|', 'Main', 'home'),
    

];
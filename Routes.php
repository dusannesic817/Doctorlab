<?php

return [
    #User
    App\Core\Route::get('|^user/register/?$|',  "User", 'create'),
    App\Core\Route::post('|^user/register/?$|', "User", "store" ),
    App\Core\Route::get('|^user/login/?$|',     "User", 'login'),
    App\Core\Route::get('|^login/?$|',          "User", 'index'),
    App\Core\Route::get('|^googleauth/?$|',     "User", 'googleAuth'),
    App\Core\Route::post('|^user/login/?$|',    "User", "authenticate" ),


    #Caregiver
    App\Core\Route::get('|^caregiver/index/?$|',         "Caregiver", 'index'),
    App\Core\Route::get('|^caregiver/register/?$|',      "Caregiver", 'create'),
    App\Core\Route::post('|^caregiver/register/?$|',     "Caregiver", "store" ),
    App\Core\Route::get('|^caregiver/show/([0-9+])/?$|', "Caregiver", "show"),


    #MakeAppointment
    App\Core\Route::get('|^makeappointment/type/([0-9+])/?$|', "MakeAppointment", 'type'),

    App\Core\Route::get('|^makeappointment/create/?$|', "MakeAppointment", 'create'),
    App\Core\Route::post('|^makeappointment/store/?$|', "MakeAppointment", 'store'),
    App\Core\Route::any('|^makeappointment/storeappointment/?$|', "MakeAppointment", 'storeAppointment'),


    #Appointement routes:
    App\Core\Route::get('|^client/appointmens/([0-9+])/?$|',    "Appointment", 'show'),
    App\Core\Route::get('|^caregiver/appointmens/([0-9+])/?$|', "Appointment", 'show'),
   

    #UserProfile-auth
    App\Core\Route::get( '|^client/profile/([0-9+])/?$|', "UserProfile", 'show'),
    App\Core\Route::post('|^client/update/([0-9+])/?$|',  "UserProfile", 'update'),
    App\Core\Route::get( '|^client/logout/?$|',           "UserProfile", 'logout'),


    #Availabilit-auth
    App\Core\Route::get('|^availability/show/([0-9+])/?$|', "Availability", 'show'),
    App\Core\Route::get('|^availability/create/?$|', "Availability", 'create'),
    App\Core\Route::post('|^availability/store/?$|', "Availability", 'store'),


    #CaregiverProfie-auth
    App\Core\Route::get('|^caregiver/profile/([0-9+])/?$|', "CaregiverProfile", 'show'),
    App\Core\Route::get('|^caregiver/edit/([0-9+])/?$|',    "CaregiverProfile", 'edit'),
    App\Core\Route::post('|^caregiver/update/([0-9+])/?$|', "CaregiverProfile", 'update'),
    App\Core\Route::get('|^caregiver/appointmens/?$|',      "CaregiverProfile", 'appointmens'),
    App\Core\Route::get('|^caregiver/logout/?$|',           "CaregiverProfile", 'logout'),
    

    App\Core\Route::any('|^.*$|', 'Main', 'home'),
    

];
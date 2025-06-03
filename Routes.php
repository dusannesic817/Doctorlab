<?php

return [
    #User
    App\Core\Route::get('|^user/register/?$|',  "User", 'create'),
    App\Core\Route::post('|^user/register/?$|', "User", "store" ),
    App\Core\Route::get('|^user/login/?$|',     "User", 'login'),
    App\Core\Route::get('|^login/?$|',          "User", 'index'),
    App\Core\Route::get('|^googleauth/?$|',     "User", 'googleAuth'),
    App\Core\Route::post('|^user/login/?$|',    "User", "authenticate" ),
    App\Core\Route::get('|^user/forgotpassword/?$|',    "User", "forgotPassword" ),
    App\Core\Route::post('|^user/resetpassword/?$|',    "User", "resetPassword" ),
    App\Core\Route::get('|^reset/([a-zA-Z0-9_-]+)$|', "User", 'reset'),
    App\Core\Route::post('|^confirmreset/?$|',        "User", 'confirmReset'),

    #Token
    App\Core\Route::get('|^confirm/([a-zA-Z0-9_-]+)$|', "Token", 'verify'),
    App\Core\Route::get('|^resetform/([a-zA-Z0-9_-]+)$|', "Token", 'resetForm'),
   

    #Caregiver
    App\Core\Route::get('|^caregiver/index/?$|',         "Caregiver", 'index'),
    App\Core\Route::get('|^caregiver/register/?$|',      "Caregiver", 'create'),
    App\Core\Route::post('|^caregiver/register/?$|',     "Caregiver", "store" ),
    App\Core\Route::get('|^caregiver/show/([0-9]+)/?$|', "Caregiver", "show"),
    App\Core\Route::get('|^caregiver/([a-z]+)/?$|',     "Caregiver", "specificCaregivers"),
    App\Core\Route::get('|^caregiver/search/([a-z]+)/?$|',     "Caregiver", "search"),


    #MakeAppointment
    App\Core\Route::get('|^makeappointment/type/([0-9]+)/?$|', "MakeAppointment", 'type'),
    App\Core\Route::get('|^makeappointment/show/([0-9]+)/?$|', "MakeAppointment", 'show'),
    App\Core\Route::get('|^makeappointment/create/?$|', "MakeAppointment", 'create'),
    App\Core\Route::post('|^makeappointment/store/?$|', "MakeAppointment", 'store'),
    App\Core\Route::any('|^makeappointment/storeappointment/?$|', "MakeAppointment", 'storeAppointment'),
    App\Core\Route::get('|^makeappointment/cancel/?$|', "MakeAppointment", 'cancelAppointment'),
   


    #Appointement routes-auth:
    App\Core\Route::get('|^caregiver/appointments/index?$|',    "Appointment", 'index'),
    App\Core\Route::get('|^client/appointments/([0-9]+)/?$|',    "Appointment", 'client'),
    App\Core\Route::get('|^caregiver/appointments/([0-9]+)/?$|', "Appointment", 'show'),
    App\Core\Route::post('|^appointments/update/([0-9]+)/?$|', "Appointment", 'update'),
    App\Core\Route::post('|^appointments/cancel/([0-9]+)/?$|', "Appointment", 'cancel'),
    App\Core\Route::any( '|^appointment/search/?$|',          "Appointment", 'search'),
   

    #UserProfile-auth
    App\Core\Route::get( '|^client/profile/([0-9]+)/?$|', "UserProfile", 'show'),
    App\Core\Route::post('|^client/update/([0-9]+)/?$|',  "UserProfile", 'update'),
    App\Core\Route::get( '|^client/logout/?$|',           "UserProfile", 'logout'),
    App\Core\Route::post('|^client/delete/([0-9]+)/?$|',  "UserProfile", 'destroy'),
    



    #Availabilit-auth
    App\Core\Route::get('|^availability/show/([0-9]+)/?$|', "Availability", 'show'),
    App\Core\Route::get('|^availability/create/?$|', "Availability", 'create'),
    App\Core\Route::post('|^availability/store/?$|', "Availability", 'store'),


    #CaregiverProfie-auth
    App\Core\Route::get('|^caregiver/profile/([0-9]+)/?$|', "CaregiverProfile", 'show'),
    App\Core\Route::get('|^caregiver/edit/([0-9]+)/?$|',    "CaregiverProfile", 'edit'),
    App\Core\Route::post('|^caregiver/update/([0-9]+)/?$|', "CaregiverProfile", 'update'),
    App\Core\Route::post('|^caregiver/delete/([0-9]+)/?$|', "CaregiverProfile", 'destroy'),
    App\Core\Route::get('|^caregiver/appointments/?$|',     "CaregiverProfile",'appointmens'),
    App\Core\Route::get('|^caregiver/logout/out?$|',           "CaregiverProfile", 'logout'),


    #ChatGpt
    App\Core\Route::any('|^assistent?$|', "ChatGpt", 'index'),


    #Api
    App\Core\Route::get( '|^api/appointments/notifications?$|',       "Appointment", "sendNotification"),
    App\Core\Route::post('|^api/appointments/notifications/read?$|',  "Appointment", "readNotification"),
   // App\Core\Route::any( '|^api/appointments/search/?$|',             "Appointment", 'search'),





    #Main-home
    App\Core\Route::any('|^.*$|', 'Main', 'home'),
    

];
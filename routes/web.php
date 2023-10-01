<?php

use App\Controllers\DashboardController;
use App\Controllers\LoginController;

use Lib\Route;


//Login

Route::get('/',[LoginController::class, 'login']);


//Register
Route::get('/register', function(){
    echo 'Hello World ss';
});

//Dashboard

Route::get('/dashboard',[DashboardController::class, 'index'] );

Route::dispatch();
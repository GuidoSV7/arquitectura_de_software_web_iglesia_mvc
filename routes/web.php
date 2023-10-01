<?php

use App\Controllers\LoginController;
use Lib\Route;


//Login

Route::get('/',[LoginController::class, 'login']);

Route::get('/crear/hola', function(){
    echo 'Hello World ss';
});

Route::get('/users/:id', function($id){
    echo 'El id es:'.$id;
});

Route::dispatch();
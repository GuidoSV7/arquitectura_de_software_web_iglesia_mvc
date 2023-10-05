<?php

use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\UserController;
use Lib\Route;


//Login

Route::get('/',[LoginController::class, 'login']);
Route::post('/',[LoginController::class, 'login']);


//Register
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'register']);

//Dashboard

Route::get('/dashboard',[DashboardController::class, 'index'] );


//Users
Route::get('/users', [UserController::class, 'index']);
Route::post('/users/create', [UserController::class, 'create']);
Route::get('/users/{user}/show', [UserController::class, 'index']);
Route::get('/users/{user}/edit', [UserController::class, 'edit']);

Route::dispatch();
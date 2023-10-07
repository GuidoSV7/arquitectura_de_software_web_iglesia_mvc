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

Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/create', [UserController::class, 'create']);

Route::get('/users/:id/show', [UserController::class, 'show']);

Route::get('/users/:id/edit', [UserController::class, 'edit']);
Route::post('/users/:id/edit', [UserController::class, 'edit']);

Route::get('/users/:id/delete', [UserController::class, 'delete']);

Route::dispatch();
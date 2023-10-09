<?php

use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\UserController;
use App\Controllers\MinisteryController;
use App\Controllers\ChargueController;
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


//Ministerys

Route::get('/ministerys', [MinisteryController::class, 'index']);
Route::get('/ministerys/create', [MinisteryController::class, 'create']);
Route::post('/ministerys/create', [MinisteryController::class, 'create']);
Route::get('/ministerys/:id/show', [MinisteryController::class, 'show']);
Route::get('/ministerys/:id/edit', [MinisteryController::class, 'edit']);
Route::post('/ministerys/:id/edit', [MinisteryController::class, 'edit']);
Route::get('/ministerys/:id/delete', [MinisteryController::class, 'delete']);

//Chargues
Route::get('/chargues', [ChargueController::class, 'index']);
Route::get('/chargues/create', [ChargueController::class, 'create']);
Route::post('/chargues/create', [ChargueController::class, 'create']);
Route::get('/chargues/:id/show', [ChargueController::class, 'show']);
Route::get('/chargues/:id/edit', [ChargueController::class, 'edit']);
Route::post('/chargues/:id/edit', [ChargueController::class, 'edit']);
Route::get('/chargues/:id/delete', [ChargueController::class, 'delete']);

//Vista Usuarios








Route::dispatch();
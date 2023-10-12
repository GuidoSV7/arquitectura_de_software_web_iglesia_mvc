<?php

use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\UserController;
use App\Controllers\AdminController;
use App\Controllers\MinisteryController;
use App\Controllers\ChargueController;
use App\Controllers\EventController;

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
Route::get('/users', [AdminController::class, 'index']);
Route::get('/users/create', [AdminController::class, 'create']);
Route::post('/users/create', [AdminController::class, 'create']);
Route::get('/users/:id/show', [AdminController::class, 'show']);
Route::get('/users/:id/edit', [AdminController::class, 'edit']);
Route::post('/users/:id/edit', [AdminController::class, 'edit']);
Route::get('/users/:id/delete', [AdminController::class, 'delete']);


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

//Events
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events/create', [EventController::class, 'create']);
Route::get('/events/:id/show', [EventController::class, 'show']);
Route::get('/events/:id/edit', [EventController::class, 'edit']);
Route::post('/events/:id/edit', [EventController::class, 'edit']);
Route::get('/events/:id/delete', [EventController::class, 'delete']);


//Vista Usuarios
Route::get('/home', [UserController::class, 'home']);
Route::get('/about', [UserController::class, 'about']);







Route::dispatch();
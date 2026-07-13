<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',[UserController::class, 'getUser']);
Route::get('/getName/{id}/{name}',[UserController::class, 'getName']);
Route::get('/student',[StudentController::class, 'getStudent']);
Route::get('/student/queries',[StudentController::class, 'queries']);
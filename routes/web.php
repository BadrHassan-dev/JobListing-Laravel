<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;

// Home page
Route::view('/', 'home');

// Contact page
Route::view('/contact', 'contact');

// Register page
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);

// Job routes - JobController is a resource controller
// Functions in JobController are: index, show, create, store, edit, update, destroy
Route::resource('jobs', JobController::class);

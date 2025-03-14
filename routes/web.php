<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;

// Home page
Route::view('/', 'home');

// Contact page
Route::view('/contact', 'contact');

// Job routes - JobController is a resource controller
// Functions in JobController are: index, show, create, store, edit, update, destroy
Route::resource('jobs', JobController::class);

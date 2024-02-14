<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::resource('/home', UserController::class);

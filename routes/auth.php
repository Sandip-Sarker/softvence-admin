<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;

Route::get('/login', [LoginController::class, 'create'])->name('login');


Route::get('/registration', [RegistrationController::class, 'create'])->name('registration');

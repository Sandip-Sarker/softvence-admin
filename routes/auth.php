<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;

Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');


Route::get('/registration', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');

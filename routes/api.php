<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/registration', [AuthController::class, 'registration']);

Route::middleware('auth:api')->group(function () {

    Route::get('/logout', [AuthController::class, 'logout']);
});



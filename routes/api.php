<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Me\MeController;

Route::middleware('auth:sanctum')->get('/me', [MeController::class, 'show']);

Route::post('/login', LoginController::class);
Route::post('/logout', LogoutController::class);
Route::post('/register', RegisterController::class);




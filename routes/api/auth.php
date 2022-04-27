<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth;

/**
 * Rutas de autenticación [API]
 */

Route::post('login', [Auth\AuthController::class, 'login']);
Route::post('logout', [Auth\AuthController::class, 'logout']);
Route::post('refresh', [Auth\AuthController::class, 'refresh']);
Route::post('me', [Auth\AuthController::class, 'me']);

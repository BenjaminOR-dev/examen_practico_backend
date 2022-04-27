<?php

/**
 * Rutas API [Routing]
 */

use Illuminate\Support\Facades\Route;

Route::prefix('auth')
    ->name('auth.')
    ->group(base_path('routes/api/auth.php'));

Route::prefix('resources')
    ->name('resources.')
    ->middleware('auth:api')
    ->group(base_path('routes/api/resources.php'));

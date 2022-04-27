<?php

/**
 * Rutas API [Routing]
 */

use Illuminate\Support\Facades\Route;

Route::prefix('resources')
    ->name('resources.')
    ->group(base_path('routes/api/resources.php'));

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Data;

/**
 * Rutas de información [API]
 */

Route::get('examenes-disponibles', [Data\ExamenesController::class, 'disponibles'])->name('examenes_disponibles');

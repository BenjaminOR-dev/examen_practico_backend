<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Resources;

/**
 * Rutas de recursos [API]
 */

Route::resource('tbl-examenes', Resources\TBLExamenesController::class)->names('tbl_examenes.');

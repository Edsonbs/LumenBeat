<?php

use App\Http\Controllers\TemporalController;
use Illuminate\Support\Facades\Route;

// Página por defecto (página de inicio)
Route::get('/', [TemporalController::class, 'showTemporal']);

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WidgetsController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\WidgetsController::class, 'create']);

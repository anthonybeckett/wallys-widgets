<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WidgetsController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\WidgetsController::class, 'create']);

//Orders
Route::post('/order/process', [\App\Http\Controllers\OrderController::class, 'process']);

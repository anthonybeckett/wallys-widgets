<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WidgetsController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\WidgetsController::class, 'create']);
Route::post('/store', [\App\Http\Controllers\WidgetsController::class, 'store']);

//Orders
Route::post('/order/process', [\App\Http\Controllers\OrderController::class, 'process']);
Route::get('/order/received', [\App\Http\Controllers\OrderController::class, 'index']);

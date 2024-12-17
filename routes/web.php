<?php

use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PayPalController::class, 'index']);
Route::get('/create/{amount}', [PayPalController::class, 'create']);
Route::post('/complete', [PayPalController::class, 'complete']);

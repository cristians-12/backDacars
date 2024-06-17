<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'xd']);

Route::get('/si', function () {
    return 'hola';
});

Route::view('/register', 'register');

Route::post('/registrar', [AuthController::class, 'register']);

Route::get('/products/{product}', [ProductController::class, 'product']);

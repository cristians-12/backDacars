<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'xd']);

Route::get('/si', function () {
    return 'hola';
});

Route::get('/products/{product}', [ProductController::class, 'product']);

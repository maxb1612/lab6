<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::get('/', [ProductsController::class, 'getProductsMain']);
Route::get('/category', [ProductsController::class, 'getProductsCategory']);
Route::get('/profile', [UserController::class, 'getProfile']);
Route::post('/profile', [UserController::class, 'postProfile']);
Route::get('/cart', [UserController::class, 'getCart']);

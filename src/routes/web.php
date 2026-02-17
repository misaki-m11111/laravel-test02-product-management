<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/detail/{id}', [ProductController::class, 'show']);

Route::put('/products/{id}/update',[ProductController::class,'update']);

Route::get('/products/register',[ProductController::class,'create']);

Route::post('/products/register',[ProductController::class,'store']);

Route::get('/products/search',[ProductController::class,'search']);

Route::delete('/products/{id}/delete',[ProductController::class,'destroy']);


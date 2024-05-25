<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('list');
// Route::get('/products/create', [ProductController::class, 'create'])->name('list');;
Route::get('/products/create', [ProductController::class, 'create'])->name('create');
Route::post('/products', [ProductController::class, 'store'])->name('store');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // to use and connect this folder inside

Route::get('/', [ProductController::class, 'landing'])->name('products.landing');

Route::get('/view', [ProductController::class, 'view'])->name('products.view');

Route::get('/index', [ProductController::class, 'index'])->name('products.index');

Route::get('/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
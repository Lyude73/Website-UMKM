<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Auth::routes();

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/create', [HomeController::class, 'create'])->name('create');
    Route::post('/store', [HomeController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [HomeController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('delete');
});

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/menu', [ProductController::class, 'menu'])->name('menu');
Route::get('/reviews', [ProductController::class, 'reviews'])->name('reviews');
Route::get('/reviews/create', [ProductController::class, 'create'])->name('create');
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');

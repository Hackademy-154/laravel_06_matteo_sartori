<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/books', [BookController::class, 'bookCreate'])->name('books');
Route::get('/books/index', [BookController::class, 'bookIndex'])->name('index');
Route::post('/book/store', [BookController::class, 'bookStore'])->name('store');

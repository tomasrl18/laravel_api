<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\{PostController, CategoryController};

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);

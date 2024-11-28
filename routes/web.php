<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\FirstController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [FirstController::class, 'index'])->name('contact');

Route::resource('example', FirstController::class);

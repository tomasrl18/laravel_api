<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\FirstController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [FirstController::class, 'index'])->name('contact');

Route::get('/contact2', function () {
    return view('contact2');
})->name('contact2');

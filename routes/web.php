<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\FirstController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [FirstController::class, 'index'])->name('contact');
Route::get('/contact/{user_id}', [FirstController::class, 'show'])->name('contact.show');

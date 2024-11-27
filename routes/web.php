<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
//    return redirect()->route('contact2');
//    return view('contact', [
//        'name' => 'Tomás'
//    ]);
    return to_route('contact2');
})->name('contact');

Route::get('/contact2', function () {
    return view('contact2');
})->name('contact2');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/crud', function () {
    $data = [
        'name' => 'Tomás',
        'age' => 21,
        'isDev' => true
    ];

    return view('crud.index', $data);
})->name('crud');

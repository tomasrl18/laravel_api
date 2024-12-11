<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\{PostController, CategoryController};
use App\Http\Middleware\UserAccessDashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => '/dashboard', 'middleware' => ['auth', UserAccessDashboard::class]], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

require __DIR__.'/auth.php';

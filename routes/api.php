<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\{CategoryController, PostController};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('category/all', [CategoryController::class, 'getAllCategories']);
Route::get('category/{slug}', [CategoryController::class, 'findCategoryBySlug']);
Route::resource('category', CategoryController::class);

Route::get('post/all', [PostController::class, 'getAllPosts']);
Route::get('post/{slug}', [PostController::class, 'findPostBySlug']);
Route::resource('post', PostController::class);

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('tutorial/{cat_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCatPost']);
Route::get('tutorial/{cat_slug}/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewPost']);

Route::prefix('admin')->middleware('auth', 'isAdmin')->group( function(){

    Route::get('dashboard/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    
    Route::get('category /', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category /', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('insert-category /', [App\Http\Controllers\Admin\CategoryController::class, 'insert']);
    Route::get('edit-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);

    Route::get('post', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('insert-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('edit-post/{id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{id}', [App\Http\Controllers\Admin\PostController::class, 'delete']);
    


    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('edit-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{id}', [App\Http\Controllers\Admin\UserController::class, 'update']);

    
});




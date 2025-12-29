<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route های RESTful برای Users
Route::resource('users', UserController::class);

Route::get('/users/{user}/posts', [UserController::class, 'showPosts'])->name('users.posts');
Route::get('/users/{user}/comments', [UserController::class, 'showComments'])->name('users.comments');
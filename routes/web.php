<?php

use App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/post/{post:slug}', [Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/category/{category:slug}', [Controllers\PostController::class, 'category'])->name('post.category');
Route::get('/author/{author:username}', [Controllers\PostController::class, 'author'])->name('post.author');

Route::get('welcome-mail', function () {
    return new \App\Mail\WelcomeMail(\App\Models\User::first());
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

//Posts links
Route::get('/', [PostController::class, 'index'])->name('posts.index'); //Land on the index

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); //Land on the 'create article' page

Route::get('/posts/{post}', [PostController::class, 'view'])->name('posts.view'); //Land on the 'view' page of the right article 

Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); //Send a POST request to add the article

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); //Land on the 'edit' page of the right article 

Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update'); //Store the edited article

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); //Remove the article

//Search links

Route::get('/search', [PostController::class, 'search'])->name('posts.search');

Route::get('categories/{category}', [CategoryController::class, 'posts'])->name('posts.category');

//Comments links

Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.create');



Route::get('register', [RegisterController::class, 'create'])->name('user.create')->middleware('guest');

Route::post('register', [RegisterController::class, 'store'])->name('user.store')->middleware('guest');

Route::post('logout',[SessionsController::class, 'destroy'])->name('session.logout')->middleware('auth');

Route::get('login', [SessionsController::class, 'create'])->name('session.create')->middleware('guest'); //

Route::post('login', [SessionsController::class, 'store'])->name('session.login')->middleware('guest'); //
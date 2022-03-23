<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PremiumController;

//Newsletter
Route::post('/newsletter', NewsletterController::class);

//Posts (admin)

Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('admin'); //Send a POST request to add the article

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('admin'); //Land on the 'create article' page

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('admin'); //Land on the 'edit' page of the right article 

Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update')->middleware('admin'); //Store the edited article

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware('admin'); //Remove the article

//Posts (guest)
Route::get('/', [PostController::class, 'index'])->name('posts.index'); //Land on the index

Route::get('/posts/{post}', [PostController::class, 'view'])->name('posts.view'); //Land on the 'view' page of the right article 

//Search
Route::get('/search', [PostController::class, 'search'])->name('posts.search');

Route::get('/categories/{category}', [PostController::class, 'categories'])->name('posts.category');

//Categories
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.create')->middleware('auth');

//Comments
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.create')->middleware('auth');

//Register
Route::get('register', [RegisterController::class, 'create'])->name('user.create')->middleware('guest');

Route::post('register', [RegisterController::class, 'store'])->name('user.store')->middleware('guest');

//Premium

Route::get('premium', [PremiumController::class, 'view'])->name('premium.view')->middleware('auth');

Route::post('premium', [PremiumController::class, 'store'])->name('premium.store')->middleware('auth');

//Sessions
Route::post('logout',[SessionsController::class, 'destroy'])->name('session.logout')->middleware('auth');

Route::get('login', [SessionsController::class, 'create'])->name('session.create')->middleware('guest'); //

Route::post('login', [SessionsController::class, 'store'])->name('session.login')->middleware('guest'); //
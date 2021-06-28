<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Links for the posts
Route::get('/', [PostController::class, 'index'])->name('posts.index'); //Land on the index

Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); //Land on the index

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); //Land on the 'create article' page

Route::get('/posts/{post}', [PostController::class, 'view'])->name('posts.view'); //Land on the 'view' page of the right article 

Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); //Send a POST request to add the article

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); //Land on the 'edit' page of the right article 

Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update'); //Store the edited article

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); //Remove the article

//Links for the comments

//Links for users

Route::get('/login', [PostController::class, 'login'])->name('user.login');
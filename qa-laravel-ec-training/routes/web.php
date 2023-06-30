<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => 'guest'], function(){
	Route::get('/signup', [UserController::class, 'getSignup'])->name('signup');
	Route::post('/signup', [UserController::class, 'postSignup'])->name('post.signup');

	Route::get('/login', [UserController::class, 'getLogin'])->name('login');
	Route::post('/login', [UserController::class, 'postLogin'])->name('post.login');
});

Route::group(['middleware' => 'auth'], function() {
	Route::get('/posts', [PostsController::class, 'index'])->name('post');
	Route::get('/posts/create', [PostsController::class, 'create'])->name('post.create');
	Route::post('/posts', [PostsController::class, 'store'])->name('post.store');

	Route::get('/posts/{id}', [PostsController::class, 'show'])->name('post.show');
	Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('post.edit');
	Route::post('/posts/{id}/update', [PostsController::class, 'update'])->name('post.update');
	Route::post('/posts/{id}/derete', [PostsController::class, 'destroy'])->name('post.delete');

	Route::get('/logout', [UserController::class, 'getLogout'])->name('logout');
});


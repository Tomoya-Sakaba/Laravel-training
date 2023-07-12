<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFollowController;


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
	Route::resource('posts', PostsController::class);
	Route::get('/', [PostsController::class, 'index'])->name('post');
	Route::get('/follow/{id}', [PostsController::class, 'followIndex'])->name('followIndex');
	Route::get('/mypage/{id}', [UserController::class, 'show'])->name('mypage');

	Route::get('/users/{id}/followings', [UserController::class, 'followings'])->name('followings');
	Route::get('/users/{id}/followers', [UserController::class, 'followers'])->name('followers');

	Route::post('/users/{id}/follow', [UserFollowController::class, 'store'])->name('follow');
	Route::post('/users/{id}/unfollow', [UserFollowController::class, 'destroy'])->name('unfollow');
	Route::get('/logout', [UserController::class, 'getLogout'])->name('logout');
});


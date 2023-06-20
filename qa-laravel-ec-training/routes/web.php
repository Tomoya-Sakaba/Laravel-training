<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    return view('welcome');
});

Route::get('/posts', [PostsController::class, 'index'])->name('post');
Route::get('/posts/create', [PostsController::class, 'create'])->name('post.create');
Route::post('/posts', [PostsController::class, 'store'])->name('post.store');

Route::get('/posts/{id}', [PostsController::class, 'show'])->name('post.show');
Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('post.edit');

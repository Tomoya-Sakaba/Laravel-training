<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
	{
		//$posts = Post::all() -> sortByDesc('id');
		$posts = Post::orderBy('id', 'desc')->get();
		return view('posts', [
			'posts' => $posts,
		]);
	}
}

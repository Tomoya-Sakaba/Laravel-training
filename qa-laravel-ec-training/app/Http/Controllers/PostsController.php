<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;

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

	public function show($id)
	{
		$post = Post::find($id);
		return view('show', [
			'post' => $post
		]);
	}

	public function create()
	{
		return view('create');
	}

	public function store(PostRequest $request)
	{
		//フォームに入力されたものをPostテーブルに入れ込む
		$request->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

		return redirect()->route('post');
	}

	public function edit($id)
	{
		$post = Post::find($id);
		return view('edit', [
			'post' => $post
		]);
	}

	public function update(PostRequest $request, $id)
	{
		Post::find($id)->update([
			'title' => $request->title,
			'body' => $request->body
		]);
		return redirect()->route('post');
	}

	public function destroy($id)
	{
		Post::find($id)->delete();
		return redirect()->route('post');
	}
}

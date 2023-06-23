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

	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:20',
			'body' => 'required'
		]);

		//フォームに入力されたものをPostテーブルに入れ込む
		Post::create($request->all());

		return redirect()->route('post');
	}

	public function edit($id)
	{
		$post = Post::find($id);
		return view('edit', [
			'post' => $post
		]);
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required|max:20',
			'body' => 'required'
		]);
		Post::find($id)->update([
			'title' => $request->title,
			'body' => $request->body
		]);
		return redirect()->route('post');
	}
}

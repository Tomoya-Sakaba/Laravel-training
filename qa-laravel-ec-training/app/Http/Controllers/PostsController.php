<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
	{
		//$posts = Post::all() -> sortByDesc('id');
		$posts = Post::orderBy('id', 'desc')->paginate(5);
		return view('home', [
			'posts' => $posts,
		]);
	}

	public function followIndex($id)
	{
		$posts = Post::orderBy('id', 'desc')->paginate(5);
		$user = User::find($id);
		$followings = $user->followings()->get();

		$data = [
			'user' => $user,
			'posts' => $posts,
			'followings' => $followings,
		];
		return view('follow_index', $data);
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
		$user = auth::user();
		$posts = $user->posts()->orderBy('id', 'desc')->get();
		return view('create', [
			"posts" => $posts,
		]);
	}

	public function store(PostRequest $request)
	{
		dd($request);
		DB::transaction(function () use ($request) {
			//フォームに入力されたものをPostテーブルに入れ込む
			$request->user()->posts()->create([
				'title' => $request->title,
				'body' => $request->body,
			]);
		});

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
		DB::transaction(function () use ($request, $id) {
			Post::find($id)->update([
				'title' => $request->title,
				'body' => $request->body
			]);
		});
		return redirect()->route('post');
	}

	public function destroy($id)
	{
		DB::transaction(function () use ($id) {
			$post = Post::find($id);
			if (Auth::id() == $post->user_id) {
				$post->delete();
			}
		});
		return redirect()->route('post');
	}
}

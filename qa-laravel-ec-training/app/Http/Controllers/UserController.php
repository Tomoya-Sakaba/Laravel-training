<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignup()
	{
		return view('user.signup');
	}

	public function postSignup(request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'email' => 'email|required|unique:users',
			'password' => 'required|min:8|confirmed'
		]);

		//User::create($request->all());だパスワードがハッシュされない
		$user = new User([
			'name' => $request -> input('name'),
			'email' => $request -> input('email'),
			'password' => bcrypt($request->input('password')),
		]);

		$user -> save();

		return redirect()->route('post');
	}

	public function getLogin()
	{
		return view('user.login');
	}

	public function postLogin(request $request)
	{
		$this->validate($request, [
			'email' => 'email|required',
			'password' => 'required|min:8'
		]);

		if (Auth::attempt(['email' => $request -> input('email'), 'password' => $request -> input('password'),])){
			return redirect()->route('post');
		}

		return redirect()->back();
	}

	public function getLogout(){
		Auth::logout();
		return redirect()->route('login');
	}

	public function index()
	{
		$users = User::orderBy('id', 'desc')->get();
		return view('home', [
			'users' => $users,
		]);
	}

	public function show($id)
	{
		$user = User::find($id);
		$posts = $user->posts()->orderBy('id', 'desc')->get();
		$data=[
            'user' => $user,
            'posts' => $posts,
        ];
        $data += $this->counts($user);
		return view('mypage', $data);
	}

	public function followings($id)
	{
		$posts = Post::orderBy('id', 'desc')->get();
		$user = User::find($id);
		$followings = $user->followings()->get();
		foreach($posts as $post) {
			foreach($followings as $following) {
				if($post->id == $following->id) {
					$posts = ... ;
		}}};

		$data = [
			'user' => $user,
			'posts' => $posts,
			'follows' => $followings,
		];
		$data += $this->counts($user);
		return view('user.followings', $data);
	}

	public function followers($id)
	{
		$posts = Post::orderBy('id', 'desc')->get();
		$user = User::find($id);
		$followers = $user->followers()->get();
		
		$data = [
			'user' => $user,
			'posts' => $posts,
			'follows' => $followers,
		];
		$data += $this->counts($user);
		return view('user.followers', $data);
	}
}

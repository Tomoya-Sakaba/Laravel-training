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
		$newUser = $this->validate($request, [
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
		//dd($user);
		if (Auth::attempt($newUser)){
			return redirect()->route('post');
		};

		//return redirect()->route('post');
	}

	public function getLogin()
	{
		return view('user.login');
	}

	public function postLogin(request $request)
	{
		$user = $this->validate($request, [
			'email' => 'email|required',
			'password' => 'required|min:8'
		]);

		if (Auth::attempt($user)){
			return redirect()->route('post');
		};

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
		$user = User::find($id);
		$followings = $user->followings()->get();
		$data = [
			'user' => $user,
			'follows' => $followings,
		];
		// $data = $data + $this->counts($user);
		$data += $this->counts($user);
		return view('user.followings', $data);
	}

	public function followers($id)
	{
		$user = User::find($id);
		$followers = $user->followers()->get();
		
		$data = [
			'user' => $user,
			'follows' => $followers,
		];
		$data += $this->counts($user);
		return view('user.followers', $data);
	}
}

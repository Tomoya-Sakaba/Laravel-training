@extends('layouts.app')
@section('content')
	<div class="container py-4">
		<div class="p-5 bg-dark rounded-4">
			<div class="text-center text-white">
				<h1>掲示板app</h1>
			</div>
		</div>
		<ul class="nav nav-tabs nav-justified mt-5">
			<li class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">
				<a href="/" class="">全ての投稿</a>
			</li>
			<li class="nav-item nav-link {{ Request::is('follow/' . Auth::id()) ? 'active' : '' }}">
				<a href="{{ route('followIndex', ['id' => Auth::id()]) }}" class="">フォロー中</a>
			</li>
		</ul>
	</div>
	@include('posts',['posts' => $posts])
@endsection
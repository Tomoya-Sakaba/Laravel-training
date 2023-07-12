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
	<div class="container my-4">
		@foreach ($posts as $post)
			@php
				$user = App\Models\User::find($post->user_id);
			@endphp
			@foreach ($followings as $following)
				@if($user->id == $following->id)
					<div class="mb-1">
						<a href="{{ route('mypage', ['id' => $user->id]) }}" class="h2">＠{{ $user->name }}</a>
					</div>
					<div class="card mb-4">
						<div class="card-header">
							<h2>{{ $post->title }}</h2>
						</div>
						<div class="card-body">
							<p class="card-text">{{ $post->body }}</p>
							<a class="card-link" href="{{ route('posts.show', ['post' => $post->id]) }}">詳細をみる</a>
						</div>
						<div class="card-footer">
							<span>投稿日時:{{ $post->created_at->format('Y-m-d') }}</span>
						</div>
					</div>
				@endif
			@endforeach
		@endforeach
	</div>
@endsection
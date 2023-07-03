@extends('layouts.app')

@section('content')

	<h1>{{ $user->name }}</h1>
	<ul class="nav nav-tabs nav-justified mt-5 mb-2">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="{{ route('mypage', ['id'=>Auth::id()]) }}">
				投稿<br><div class="badge bg-secondary">{{ $count_posts }}</div>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
		</li>
	</ul>

	@include('index', ['posts' => $posts])

@endsection
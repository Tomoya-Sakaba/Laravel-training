@extends('layouts.app')

@section('content')

	<h1>{{ $user->name }}</h1>
	
	@include('follow.follow_button', ['user' => $user])

	<ul class="list-unstyled list-group list-group-horizontal mt-3">
		<li>
			<a href="{{ route('followings', ['id' => $user->id]) }}" class="text-decoration-none list-item link-secondary">
			{{ $count_followings }}  フォロー
			</a>
		</li>
		<li>
			<a href="{{ route('followers', ['id' => $user->id]) }}" class="text-decoration-none list-item ms-2 link-secondary">
			{{ $count_followers }}  フォロワー
			</a>
		</li>
	</ul>

	@include('index', ['posts' => $posts])

@endsection
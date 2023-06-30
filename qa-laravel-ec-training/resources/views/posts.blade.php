@extends('layouts.app')

@section('content')
	<div class="container py-4">
			<div class="p-5 bg-dark rounded-4">
				<div class="text-center text-white">
					<h1>掲示板app</h1>
				</div>
			</div>
	</div>
	
	<div class="container mt-4">
		<a class="btn btn-primary" href="{{ route('post.create') }}">投稿の新規作成</a>
	</div>
	<div class="container my-4">
		@foreach ($posts as $post)
			<div class="card mb-4">
				<div class="card-header">
					<h2>{{ $post->title }}</h2>
				</div>
				<div class="card-body">
					<p class="card-text">{{ $post->body }}</p>
					<a class="card-link" href="{{ route('post.show', ['id' => $post->id]) }}">詳細をみる</a>
				</div>
				<div class="card-footer">
					<span>投稿日時:{{ $post->created_at->format('Y-m-d') }}</span>
				</div>
			</div>
		@endforeach
	</div>
@endsection
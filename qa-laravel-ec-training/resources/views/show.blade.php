@extends('layouts.app')

@section('content')
    <div class="my-4">
        <div class="card mb-4">
            <div class="card-header">
                <h2>{{ $post->title }}</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <div class="card-footer">
                <span>投稿日時:{{ $post->created_at->format('Y-m-d') }}</span>
            </div>
        </div>
    </div>
	<div class="contain">
		@if (Auth::id() == $post->user_id)
			<a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">編集する</a>
			<div class="d-inline-flex">
				{!! Form::open(['route' => ['posts.destroy', $post->id], 'method'=>'POST']) !!}
					@method('DELETE')
					{!! Form::submit('削除する',['class'=>'btn btn-danger']) !!}
				{!! Form::close() !!}
			</div>
		@endif
	</div>
	<div class="text-end">
		<a class="btn btn-secondary" href="{{ route('post') }}">戻る</a>
	</div>

@endsection
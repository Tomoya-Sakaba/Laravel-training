@extends('layouts.app')

@section('content')
	<div class="container my-4">
        <div class="border p-4">
            <h5 class="mb-4">投稿の新規作成</h5>
            <!-- {!!Form::open(['route' => 'posts.store'])!!} -->
			<form method="POST" action="{{ route('posts.store') }}" acsept-charset="UTF-8">
				@csrf
                <div class="form-group">
                <!-- {!!Form::label('title','タイトル')!!} -->
				<label for="title">タイトル</label>
                <!-- {!!Form::text('title',old('title'),['class'=>'form-control'])!!} -->
				<input class="form-control" name="title" type="text" id="title">
                </div>
                <div class="form-group">
                <!-- {!!Form::label('body','本文')!!} -->
				<label for="body">本文</label>
                <!-- {!!Form::textarea('body',old('body'),['class'=>'form-control'])!!} -->
				<textarea class="form-control" name="body" cols="50" rows="10" id="body"></textarea>
                </div>
                <div class="mt-4">
                    <a class="btn btn-secondary"href="{{ route('post') }}">キャンセル</a>
                    <!-- {!!Form::submit('投稿する',['class'=>'btn btn-primary'])!!} -->
					<input class="btn btn-primary" type="submit" value="投稿する">
                </div>
            {!!Form::close()!!}
        </div>
		<h2 class="mt-5">あなたの投稿</h2>
		@include('index', ['posts' => $posts])
    </div>
@endsection
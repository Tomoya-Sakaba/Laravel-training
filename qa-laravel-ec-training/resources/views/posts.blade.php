<div class="container my-4">
	@foreach ($posts as $post)
		@php
			$user = App\Models\User::find($post->user_id);
		@endphp
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
	@endforeach
</div>
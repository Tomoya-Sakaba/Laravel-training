<div class="my-4">
	@if(count($posts) == 0)
		投稿はありません
	@else	
		@foreach ($posts as $post)
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
	@endif
</div>
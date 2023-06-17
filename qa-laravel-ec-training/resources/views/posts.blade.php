<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>掲示板</title>
</head>
<body>
<div class="container">
        <div class="container mt-4">
            <a class="btn btn-primary" href="">投稿の新規作成</a>
        </div>
    </div>
    <div class="container my-4">
		@foreach ($posts as $post)
			<div class="card mb-4">
				<div class="card-header">
					<h2>{{ $post->title }}</h2>
				</div>
				<div class="card-body">
					<p class="card-text">{{ $post->body }}</p>
					<a class="card-link" href="">詳細をみる</a>
				</div>
				<div class="card-footer">
					<span>投稿日時:{{ $post->created_at->format('Y-m-d') }}</span>
				</div>
			</div>
		@endforeach
        
    </div>
</body>
</html>
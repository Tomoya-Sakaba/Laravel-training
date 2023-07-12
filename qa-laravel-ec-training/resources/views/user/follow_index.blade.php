<div class="my-4">
	@foreach($follows as $follow)
		<div class="card mb-2">
			<div class="card-header">
				<a href="{{ route('mypage', ['id' => $user->id]) }}" class="h2">＠{{ $follow->name }}</a>
			</div>
		</div>
	@endforeach
</div>
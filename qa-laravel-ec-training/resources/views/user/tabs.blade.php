<h1>{{ $user->name }}</h1>
	
@include('follow.follow_button', ['user' => $user])

<ul class="nav nav-tabs nav-justified mt-5 mb-2">
	<li class="nav-item">
		<a class="nav-link active" aria-current="page" href="{{ route('mypage', ['id' => $user->id]) }}">
			投稿<br><div class="badge bg-secondary">{{ $count_posts }}</div>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('followers', ['id' => $user->id]) }}">
			フォロワー<br><div class="badge bg-secondary">{{ $count_followers }}</div></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('followings', ['id' => $user->id]) }}">
			フォロー中<br><div class="badge bg-secondary">{{ $count_followings }}</div></a>
	</li>
</ul>
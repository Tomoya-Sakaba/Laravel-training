<h1>{{ $user->name }}</h1>
	
@include('follow.follow_button', ['user' => $user])

<ul class="nav nav-tabs nav-justified mt-5 mb-2" role="tablist">
	<li class="nav-item" role="presentation">
		<a id="tab1" class="nav-link active" role="tab" data-bs-toggle="tab" aria-selected="true" href="{{ route('mypage', ['id' => $user->id]) }}">
			投稿<br><div class="badge bg-secondary">{{ $count_posts }}</div>
		</a>
	</li>
	<li class="nav-item" role="presentation">
		<a id="tab2" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false" href="{{ route('followers', ['id' => $user->id]) }}">
			フォロワー<br><div class="badge bg-secondary">{{ $count_followers }}</div></a>
	</li>
	<li class="nav-item" role="presentation">
		<a id="tab3" class="nav-link" role="tab" data-bs-toggle="tab" aria-selected="false" href="{{ route('followings', ['id' => $user->id]) }}">
			フォロー中<br><div class="badge bg-secondary">{{ $count_followings }}</div></a>
	</li>
</ul>

<div class="tab-content">
	<div id="mypage/" class="tab-pane active" role="tabpanel" aria-labelledby="tab1">
		@include('index', ['posts' => $posts])
	</div>
	<div id="user/*/followers" class="tab-pane" role="tabpanel" aria-labelledby="tab2">
		@include('user.follow_index', ['posts' => $posts])
	</div>
	<div id="user/*/followings" class="tab-pane" role="tabpanel" aria-labelledby="tab3">
		@include('user.follow_index', ['posts' => $posts])
	</div>
</div>
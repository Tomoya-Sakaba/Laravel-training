<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">掲示板app</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					@auth
						<li class="nav-item">{!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
						<li class="nav-item">{!! link_to_route('mypage', 'マイページ', ['id'=>Auth::id()], ['class' => 'nav-link']) !!}</li>
					@else
						<li class="nav-item">{!! link_to_route('signup', '新規ユーザ登録', [], ['class' => 'nav-link']) !!}</li>
						<li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
					@endauth
				</ul>
			</div>
		</div>
		<div class="text-end me-5">
			@auth
				{{ Auth::user()->name }}
			@endauth
		</div>
	</nav>
</header>
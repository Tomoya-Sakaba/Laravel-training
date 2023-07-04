@auth
	@if(Auth::id() != $user->id)
		@if(Auth::user()->is_following($user->id))

			{!! Form::open(['route' => ['unfollow', $user->id], 'method' => 'post']) !!}
				{!! Form::submit('フォローを外す', [class="btn btn-danger mt-1"]) !!}
			{!! Form::close() !!}

		@else

			{!! Form::open(['route' => ['follow', $user->id], 'method' => 'post']) !!}
				{!! Form::submit('フォローする', [class="btn btn-primary mt-1"]) !!}
			{!! Form::close() !!}

		@endif
	@endif
@endauth
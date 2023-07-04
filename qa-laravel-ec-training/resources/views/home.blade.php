@extends('layouts.app')
@section('content')
	<div class="container py-4">
		<div class="p-5 bg-dark rounded-4">
			<div class="text-center text-white">
				<h1>掲示板app</h1>
			</div>
		</div>
	</div>
	@include('posts',['users' => $users])
@endsection
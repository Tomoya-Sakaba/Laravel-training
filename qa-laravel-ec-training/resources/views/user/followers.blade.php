@extends('layouts.app')
@section('content')
	@include('user.tabs', ['user' => $user])
	@include('user.follow_index', ['users' => $users])
@endsection
@extends('layouts.app')

@section('content')

	@include('user.tabs', ['user' => $user])

	@include('index', ['posts' => $posts])

@endsection
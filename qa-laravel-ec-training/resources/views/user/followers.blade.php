@extends('layouts.app')
@section('content')
	@include('user.tabs', ['user' => $user])

@endsection
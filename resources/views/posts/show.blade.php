@extends('layouts.master')

@section('content')

	@include('posts.post')
	<hr>
	@include('comments.comment')
	@include('layouts.errors')

@endsection
@extends('layouts.master')

@section('content')

	<div class="blog-post">
		<h3>Login<h3>
		<form method="POST" action="/login">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name="password" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
	        @include('layouts.errors')
		</form>
	</div>

@endsection
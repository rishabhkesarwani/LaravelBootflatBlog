@extends('layouts.master')

@section('content')

	<div class="blog-post">
		<h3>Register<h3>
		<form method="POST" action="/register">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="usr">Name:</label>
				<input type="text" class="form-control" id="usr" name="name" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name="password" required>
			</div>
			<div class="form-group">
				<label for="pwd_cnfm">Password Confirmation:</label>
				<input type="password" class="form-control" id="pwd_cnfm" name="password_confirmation" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
	        @include('layouts.errors')
		</form>
	</div>

@endsection
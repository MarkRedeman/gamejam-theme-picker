@extends('welcome.layout')

@section('content')
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<h1>Register an account</h1>
	<p>You are required to register in order to vote or to submit additional themes.</p>
	<form class="form" role="form" method="POST" action="/auth/register">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<label class=" control-label">E-Mail Address</label>
			<input type="email" class="form-control" name="email" value="{{ old('email') }}">
		</div>

		<div class="form-group">
			<label class=" control-label">Password</label>
			<input type="password" class="form-control" name="password">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">
				Register
			</button>
		</div>
	</form>
@stop

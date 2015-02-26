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

<form class="form-horizontal" role="form" method="POST" action="/auth/login">
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
		<div class="checkbox">
			<label>
				<input type="checkbox" name="remember"> Remember Me
			</label>
		</div>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
			Login
		</button>

		<a href="/password/email">Forgot Your Password?</a>
	</div>
</form>
@endsection

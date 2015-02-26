<h4>Sign in before you vote</h4>
<div class="hline"></div>
{{-- <p>Once you sign in you can vote for themes or submit new themes</p> --}}
<p>
    In order to vote for themes or suggest new themes you need to login. You can sigin in directly by providing a valid emailadress and a password with minimally 3 characters.<br>
</p>

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

<form class="form" role="form" method="POST" action="/auth/login">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label class=" control-label">E-Mail Address</label>
        <div class="">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="form-group">
        <label class=" control-label">Password</label>
        <div class="">
            <input type="password" class="form-control" name="password">
        </div>
    </div>

    <div class="form-group">
        <div>
            <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                Sign in
            </button>

            <p>
                <a href="/auth/register">Don't have an account? Click here to register.</a>
            </p>
            {{-- <p>
                <a href="/password/email">Forgot Your Password?</a>
            </p> --}}
        </div>
    </div>
</form>
<div class="spacing"></div>
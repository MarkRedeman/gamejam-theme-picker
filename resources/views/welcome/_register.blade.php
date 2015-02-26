<h4>Register an account</h4>
<div class="hline"></div>
{{-- <p>Once you sign in you can vote for themes or submit new themes</p> --}}
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
        <button type="submit" class="btn btn-success">
            Register
        </button>
    </div>
</form>
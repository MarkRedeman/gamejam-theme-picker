<h4>Can't find what you're looking for?</h4>
<div class="hline"></div>

<p>
    Submit a different theme.<br>
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

<form class="form" role="form" method="POST" action="/themes">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label class=" control-label">Theme name</label>
        <div class="">
            <input type="name" class="form-control" name="name" value="{{ old('name') }}">
        </div>
    </div>

    <div class="form-group">
        <div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>
</form>
<div class="spacing"></div>
    {{-- <input type="text" class="form-control" placeholder="Search something"> --}}
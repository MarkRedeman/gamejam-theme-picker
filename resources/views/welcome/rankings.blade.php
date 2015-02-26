@extends('welcome.layout')

@section('content')
    <ul class="list-unstyled themes">
        @foreach($themes as $theme)
        <li>
            @include('welcome._theme')
        </li>
        @endforeach
    </ul>

    {!! $themes->render() !!}
@stop

@section('sidebar')
    <h4>How do I vote?</h4>
    <div class="hline"></div>
    <p>
        In order to vote for themes or suggest new themes you need to login. You can sigin in directly by providing a valid emailadress and a password with minimally 3 characters.<br>
    </p>
    @if(Auth::check())
        @include('welcome._submit')
    @else
        @include('welcome._login')
    @endif
@stop
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
    <h4>What's this?</h4>
    <div class="hline"></div>
    <p>
        This webpage is used to vote for themes to be used during the Francken Gamejam.
        A randomly picked theme will be chosen from the top 3 themes.
    </p>

    @if(Auth::check())
        @include('welcome._submit')
    @else
        @include('welcome._login')
    @endif
@stop
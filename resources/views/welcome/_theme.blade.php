@if ($user)
    @if ($theme->votedBy($user))
<form class="form" role="form" method="POST" action="/themes/{{ $theme->id }}/vote">
    <input name="_method" type="hidden" value="DELETE">
    @else
<form class="form" role="form" method="POST" action="/themes/{{ $theme->id }}/vote">
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
@endif
@include('welcome._theme_content')
@if($user)
    @if ($theme->votedBy($user))
    <button type="submit" class="pull-right btn btn-danger">Remove your vote</button>
    @else
    <button type="submit" class="pull-right btn btn-default">Add your vote</button>
    @endif
</form>
@endif
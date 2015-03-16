@extends('master')

@section('content')

    <ul>
	@foreach ($songs as $song)
		<li><a href="{{ action('SongsController@show', $song->slug) }}">{{$song->title}}</a></li>
	@endforeach
    </ul>

@stop

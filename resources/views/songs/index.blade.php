@extends('master')

@section('content')

    <ul>
	@foreach ($songs as $song)
		<li><a href="{{ action('SongsController@show', $song->slug) }}">{{$song->title}}</a></li>
	@endforeach
    </ul>

    <a class="btn btn-primary" href="{{ route('songs.create') }}">Create New Song</a>

@stop

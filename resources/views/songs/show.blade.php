@extends('master')

@section('content')

    <h3>Title <small>{{$song->title}}</small></h3>

    @if($song->lyrics)
	<h3>Lyrics</h3>
	<p><pre>{{ $song->lyrics }}</pre></p>
    @endif
    <a href="{{ action('SongsController@edit', $song->slug) }}">Edit this song</a> |
    <a href="{{ action('SongsController@index') }}">Back To list</a>

@stop

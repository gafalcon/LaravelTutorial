@extends('master')

@section('content')

    <h3>Title <small>{{$song->title}}</small></h3>

    @if($song->lyrics)
	<h3>Lyrics</h3>
	<p><pre>{{ $song->lyrics }}</pre></p>
    @endif
    <a href="{{$song->slug}}/edit">Edit this song</a> |
    <a href="/songs">Back To list</a>

@stop

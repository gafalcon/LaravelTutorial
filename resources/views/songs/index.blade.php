@extends('master')

@section('content')
    <h1>Justin Bieber official Fan Club</h1>


    <ul>
	@foreach ($songs as $song)
	    <li><a href="/songs/{{ $song->id }}">{{$song->title}}</a></li>
	@endforeach
    </ul>

@stop

@extends('app')

@section('content')
	<div class="container">
		<h1>My Chemical Romance songs</h1>
		<ul class="list-group">
			@foreach ($songs as $song)
				<li class="list-group-item">

					<a href="{{ action('SongsController@show', $song->slug) }}">{{$song->title}}</a>
					{!! delete_form(['songs.destroy',$song->slug]) !!}
				</li>

			@endforeach
		</ul>

		<a class="btn btn-primary" href="{{ route('songs.create') }}">Create New Song</a>

	</div>
@stop

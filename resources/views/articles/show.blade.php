@extends('app')

@section('content')
		<h1>
				{{ $article->title }}
				<small>
						@foreach($tags as $tag)
								<span class="badge">
										{{ $tag->name }}
								</span>
						@endforeach
				</small>
		</h1>
		<hr/>
		<article>
				
				<div class="body">{{ $article->body }}</div>
		</article>
		<br/>
		<a class="btn btn-primary" href="{{ action('ArticlesController@edit', $article->id) }}">Edit</a>
@stop

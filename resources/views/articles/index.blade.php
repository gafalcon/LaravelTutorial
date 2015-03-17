@extends('app')

@section('content')
	<div class="container">
		<h1>Articles</h1>
		<hr/>
		@foreach ($articles as $article)
			<article>
				<a href="{{ action('ArticlesController@show', [
					   'id' => $article->id
					   ]) }}">
					<h3>
						{{ $article->title }}
						<small>{{ $article->published_at->diffForHumans() }}</small>
					</h3>
				</a>
				<div class="body">{{ $article->body }}</div>
			</article>
		@endforeach

		<br/>
		<a class="btn btn-primary" href="/articles/create">Create New Article</a>
	</div>
@stop

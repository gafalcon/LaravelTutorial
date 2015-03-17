@extends('app')

@section('content')
	<div class="container">
		<h1>{{ $article->title }}</h1>
		<article>
			<div class="body">{{ $article->body }}</div>
		</article>
		<a class="btn bth-primary" href=""></a>
	</div>
@stop

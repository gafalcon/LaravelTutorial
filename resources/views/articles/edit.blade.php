@extends('app')
@section('page_title')
	Edit Article-Laravel Tutorial
@stop

@section('content')
		<h1>Edit article</h1>
		<hr/>
		{!! Form::model($article, [
			'method' => 'PATCH',
			'action' => ['ArticlesController@update', $article->id]
		  ]) !!}

		@include('articles._form', ['submit_text' => 'Update article'])

		<a href="{{ route('articles.index') }}" class="btn btn-default">Cancel</a>
		{!! Form::close() !!}

		<br/>
		@include('errors.list')
		
@stop

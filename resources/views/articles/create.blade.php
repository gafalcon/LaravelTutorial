@extends('app')
@section('page_title')
	Create Article
@stop

@section('content')
	<div class="container">
		<h1>Write a new Article</h1>
		{!! Form::open([
			'method' => 'POST',
			'action' => 'ArticlesController@store'
		  ]) !!}

		@include('articles._form', ['submit_text' => 'Create Article'])
		{!! Form::close() !!}	

		@include('errors.list')
	</div>

@stop

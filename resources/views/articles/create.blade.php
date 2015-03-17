@extends('app')

@section('content')
	<div class="container">
		<h1>Write a new Article</h1>
		{!! Form::open([
			'method' => 'POST',
			'action' => 'ArticlesController@store'
		  ]) !!}

		<div class="form-group">
			{!! form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			
			{!! Form::label('body', 'Content') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			
			{!! Form::label('published_at', 'Publish On') !!}
			{!! Form::input('date','published_at', date('Y/m/d'), ['class' => 'form-control']) !!}
		</div>
		{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}	
	</div>

@stop

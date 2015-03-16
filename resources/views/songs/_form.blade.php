<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}"}>
	{!! Form::label('title', 'Title') !!}
	{!! Form::text('title', null, array(
	'class' => 'form-control',
	'placeholder' => 'Song title'
	)) !!}
	{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	{!! Form::label('lyrics', 'Lyrics') !!}
	{!! Form::textarea('lyrics', null, [
	'class' => 'form-control',
	'placeholder' => 'enter the song\'s lyrics'
	]) !!}
</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
	{!! Form::label('slug', 'Slug', ['class' => 'class']) !!}
	{!! Form::text('slug', null, ['class'=> 'form-control']) !!}
	{!! $errors->first('slug', '<span class="help-block">:message</span>') !!}
</div>


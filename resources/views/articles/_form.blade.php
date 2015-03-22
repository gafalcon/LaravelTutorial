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

<div class="form-group">
	
	{!! Form::label('tag_list', 'Tags') !!}
	{!! Form::select('tag_list[]',$tags,null, [ 'id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>


{!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}

@section('footer')
	<script>
	$('#tag_list').select2({
		placeholder: 'Choose a tag',
		tags: true
	});
	</script>
@stop

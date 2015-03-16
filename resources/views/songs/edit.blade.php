@extends('master')

@section('content')
    <h1>Edit {{ $song->title }}</h1>

    <?= Form::model($song, [
	    'url' => action('SongsController@update', $song->slug),
	    'method' => 'PATCH'
	]) ?>

    @include('songs._form')
    
    <?= Form::submit('Update Song', ['class' => 'btn btn-primary'] ) ?>
    <a class="btn btn-default" href="<?= action('SongsController@show', $song->slug) ?>">Go Back</a>
    <?= Form::close() ?>

@stop

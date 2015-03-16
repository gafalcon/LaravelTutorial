@extends('master')

@section('content')
    <h1>Create new Song</h1>
    {!! Form::open(['route' => 'songs.store']) !!}

    @include('songs._form')
    
    {!! Form::submit('Create Song', ['class' => 'btn btn-primary'] ) !!}
    <a class="btn btn-default" href="{!! route('songs.index') !!}">Go Back</a>
    <?= Form::close() ?>

@stop

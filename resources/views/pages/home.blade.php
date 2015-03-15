@extends('master')

@section('content')
    <h1>Home page</h1>
    {!! $name !!} <!-- Not scaped output! -->
    <?php foreach($lessons as $lesson) : ?>
    <h2><?= $lesson; ?></h2>
    <?php endforeach ?>

    @foreach ($lessons as $lesson)
	<h2>{{ $lesson }}</h2>
    @endforeach
@stop

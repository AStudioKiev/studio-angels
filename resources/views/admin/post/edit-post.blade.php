@extends('template')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
    <meta charset="utf-8">
    <title>Админ панель</title>
@stop

@section('body')

<h1>Админ панель</h1>

<div>

    {!! Form::open(['files' => 'true']) !!}

        {!! Form::label('title') !!}
        {!! Form::text('title', $post->title) !!}

        <img width="50%" height="50%" src="{{ asset($post->image) }}">
        <!-- 10MB limit -->
        {!! Form::hidden('MAX_FILE_SIZE', '10000000') !!}
        {!! Form::label('image') !!}
        {!! Form::file('image') !!}

        {!! Form::label('text') !!}
        {!! Form::textarea('text', $post->text) !!}

        {!! Form::submit('Добавить') !!}

    {!! Form::close() !!}

</div>

@stop
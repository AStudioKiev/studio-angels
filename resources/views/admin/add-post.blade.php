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
        {!! Form::text('title') !!}

        <!-- 10MB limit -->
        {!! Form::hidden('MAX_FILE_SIZE', '10000000') !!}
        {!! Form::label('image') !!}
        {!! Form::file('image') !!}

        {!! Form::label('text') !!}
        {!! Form::textarea('text') !!}

        {!! Form::submit('Добавить') !!}

    {!! Form::close() !!}


    {{--<form action="index.php" method="post" enctype="multipart/form-data">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>

        <!-- 10MB limit -->
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
        <label for="img">Image</label>
        <input type="file" id="img" name="img" required>

        <label for="text">Text</label>
        <textarea id="text" name="text" required></textarea>

        <input type="hidden" name="action" value="add">
        {{ csrf_field() }}

        <input type="submit" value="Создать">
    </form>--}}
</div>

@stop
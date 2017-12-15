@extends('template')

@section('head')
    <meta charset="utf-8">
    <title>Админ панель</title>

    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
@stop

@section('body')

    <h1>Админ панель</h1>
    <h2><a href="{{url('admin/post')}}">Блог</a></h2>

@stop
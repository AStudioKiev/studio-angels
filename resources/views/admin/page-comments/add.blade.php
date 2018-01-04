@extends('layouts.admin')

@section('body')
    <h2 class="header-float-top">Админ панель</h2>
    <div class="form-holder">
        <form method="post" id="insideForm" class="form">
            {{ csrf_field() }}
            <div class="select-wrapper">
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <select name="page">
                        <option disabled>Выберите страницу</option>
                        <option value="index">index</option>
                    </select>
                </div>
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <input type="text" name="author" required placeholder="Автор" class="form-control input-field">
                </div>
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <input type="text" name="comment" required placeholder="Комментарий" class="form-control input-field">
                </div>
            </div>
            <input type="submit" value="Создать">
        </form>
    </div>
@stop
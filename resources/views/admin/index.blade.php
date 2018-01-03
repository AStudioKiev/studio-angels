@extends('layouts.admin')

@section('body')
    <div class="main-grid admin-grid">
        <div class="white-blur">
            <h2 class="header-float-top">Админ панель</h2>

            <div class="admin-holder table-responsive">
                <a href="{{url('admin/post')}}">
                    <button id="blogBtn" name="add-new-btn" class="add-new-btn">Управление блогом</button>
                </a>
                <a href="{{url('admin/page-comments')}}">
                    <button id="blogBtn" name="add-new-btn" class="add-new-btn">Управление коментариями на страницах</button>
                </a>
                <a href="{{url('admin/lessons')}}">
                    <button id="blogBtn" name="add-new-btn" class="add-new-btn">Управление расписанием</button>
                </a>
            </div>
        </div>
    </div>
@stop
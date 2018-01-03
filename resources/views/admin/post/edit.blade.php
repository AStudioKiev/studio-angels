@extends('layouts.admin')

@section('body')
    <h2 class="header-float-top">Админ панель</h2>

    <div class="form-holder">
        <form method="post" id="insideForm" class="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="select-wrapper">
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <input type="text" name="title" required class="form-control input-field" value="{{$post->title}}">
                </div>
            </div>
            <div class="select-wrapper image-upload-form">
                <div class="image-load-holder">
                    {{--<h1 style="cursor: pointer; color: red;" id="delete-img" data-toggle="modal" data-target="#myModal">Удалить</h1>--}}
                    <img width="100%" height="100%" src="{{ asset($post->image) }}">
                </div>
                <div class="select form-group upload-holder">
                    <div class="upload-fictive"><span>Choose a file</span></div>
                    <!-- 5MB limit -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                    <input type="file" name="image" class="form-control upload-file">
                    <span class="not-found-label">File is not found</span>
                </div>
            </div>
            <div class="select-wrapper mar-bt-1">
                <textarea id="text" name="text" rows="7" name="message" class="textarea-field">{{$post->text}}</textarea>
            </div>

            <input type="hidden" id="data-id" name="data-id" value="{{$post->id}}">

            <input type="submit" value="Редактировать">
        </form>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 100%; max-width: 250px;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Удалить изображение?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-yes">Да</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-no">Нет</button>
                </div>
            </div>

        </div>
    </div>
@stop
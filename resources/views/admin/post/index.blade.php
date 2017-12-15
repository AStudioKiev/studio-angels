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
<h2><a href="{{url('admin/post/add-post')}}">Добавить</a></h2>
<h2><a href="{{url('admin/post/edit-schedule')}}">Редактировать расписание</a></h2>

<table class="admin-table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Text</th>
        <th>Img</th>
        <th>Counter</th>
        <th></th>
        <th></th>
    </tr>

@foreach ($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->text}}</td>
        <td><img width="100px" height="100px" src="{{ asset($post->image) }}"></td>
        <td>{{$post->counter}}</td>
        <td><a href="{{url('admin/post/edit-post', $post->id)}}">Редактировать</a></td>
        <td class="delete-post" data-toggle="modal" data-target="#myModal" data-id="{{$post->id}}">Удалить</td>
    </tr>
@endforeach

</table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 100%; max-width: 250px;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Удалить запись?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-yes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-no">No</button>
            </div>
        </div>

    </div>
</div>

@stop

@section('js-section')

<script>
    $('.delete-post').on( "click", function() {
        $('#modal-yes').attr("data-id", $(this).attr('data-id'));
    });

    $('#modal-yes').on( "click", function() {
        var data = {dataID: $(this).attr('data-id')};
        $.ajax({
            url: 'index.php',
            type: 'POST',
            data: data,
            error: function () {
                console.log('err');
            },
            success: function (result) {
                var el = 'td[data-id=' + data['dataID'] + ']';
                $(el).parent().remove();
            }
        });
    });
</script>

@stop
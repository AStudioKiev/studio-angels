@extends('layouts.admin')

@section('body')
    <h2 class="header-float-top">Админ панель</h2>

    <div class="admin-holder table-responsive">
        <table class="table page-comment-table">
            <a href="{{url('admin')}}">
                <button id="mainBtn" name="add-new-btn" class="add-new-btn">Главная</button>
            </a>
            <a href="{{url('admin/page-comments')}}">
                <button id="mainBtn" name="add-new-btn" class="add-new-btn">Управление коментариями на страницах</button>
            </a>
            <button id="clear" data-toggle="modal" data-target="#clearModal" class="add-new-btn">Очистить корзину</button>
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Автор</th>
                <th scope="col">Текст</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="table-content">
            {{ csrf_field() }}
            @foreach ($pageComments as $pageComment)
                <tr>
                    <td>{{$pageComment->id}}</td>
                    <td>{{$pageComment->author}}</td>
                    <td>{{$pageComment->comment}}</td>
                    <td class="admin-item green-item recover-post" data-toggle="modal" data-target="#recoverModal" data-id="{{$pageComment->id}}">
                        Восстановить
                    </td>
                    <td class="admin-item red-item delete-post" data-toggle="modal" data-target="#myModal" data-id="{{$pageComment->id}}">
                        Удалить
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal delete -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 100%; max-width: 250px;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Удалить комментарий?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-yes">Да</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-no">Нет</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal recover -->
    <div id="recoverModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 100%; max-width: 250px;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Восстановить комментарий?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="recover-yes">Да</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="recover-no">Нет</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal clear -->
    <div id="clearModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 100%; max-width: 250px;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Очистить корзину?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="clear-yes">Да</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="clear-no">Нет</button>
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
            var data = {
                data_id: $(this).attr('data-id'),
                _token: $("input[name*='_token']").val()
            };
            $.ajax({
                url: '{{url('admin/page-comments/basket/delete')}}',
                type: 'POST',
                data: data,
                error: function (result) {
                    console.log('err: ', result);
                },
                success: function (result) {
                    var el = 'td[data-id=' + data['data_id'] + ']';
                    $(el).parent().remove();
                }
            });
        });

        $('.recover-post').on( "click", function() {
            $('#recover-yes').attr("data-id", $(this).attr('data-id'));
        });

        $('#recover-yes').on( "click", function() {
            var data = {
                data_id: $(this).attr('data-id'),
                _token: $("input[name*='_token']").val()
            };
            $.ajax({
                url: '{{url('admin/page-comments/basket/recover')}}',
                type: 'POST',
                data: data,
                error: function (result) {
                    console.log('err: ', result);
                },
                success: function (result) {
                    console.log('result - ', result);
                    var el = 'td[data-id=' + data['data_id'] + ']';
                    $(el).parent().remove();
                }
            });
        });

        $('#clear-yes').on( "click", function() {
            var data = {_token: $("input[name*='_token']").val()};
            $.ajax({
                url: '{{url('admin/page-comments/basket/clear')}}',
                type: 'POST',
                data: data,
                error: function (result) {
                    console.log('err: ', result);
                },
                success: function (result) {
                    $('.table-content').empty();
                }
            });
        });
    </script>

@stop
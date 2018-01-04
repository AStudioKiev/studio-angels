@extends('layouts.admin')

@section('body')
    <h2 class="header-float-top">Админ панель</h2>

    <div class="admin-holder table-responsive">
        <table class="table page-comment-table">
            <a href="{{url('admin')}}">
                <button id="mainBtn" name="add-new-btn" class="add-new-btn">Главная</button>
            </a>
            <a href="{{url('admin/page-comments/add')}}">
                <button id="addNewBtn" name="add-new-btn" class="add-new-btn">Добавить новый комментарий</button>
            </a>
            <a href="{{url('admin/page-comments/basket')}}">
                <button id="basketBtn" name="add-new-btn" class="add-new-btn">Корзина</button>
            </a>
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Автор</th>
                <th scope="col">Текст</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            {{ csrf_field() }}
            @foreach ($pageComments as $pageComment)
                <tr>
                    <td>{{$pageComment->id}}</td>
                    <td>{{$pageComment->author}}</td>
                    <td>{{$pageComment->comment}}</td>
                    <td class="admin-item green-item edit-item">
                        <a href="{{url('admin/page-comments/edit', $pageComment->id)}}">Редактировать</a>
                    </td>
                    <td class="admin-item red-item delete-item" data-toggle="modal" data-target="#myModal" data-id="{{$pageComment->id}}">Удалить</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

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
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-yes">Да</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="modal-no">Нет</button>
                </div>
            </div>

        </div>
    </div>

@stop

@section('js-section')

    <script>
        $('.delete-item').on( "click", function() {
            $('#modal-yes').attr("data-id", $(this).attr('data-id'));
        });

        $('#modal-yes').on( "click", function() {
            var data = {
                data_id: $(this).attr('data-id'),
                _token: $("input[name*='_token']").val()
            };
            $.ajax({
                url: "{{url('admin/page-comments/delete')}}",
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
    </script>

@stop
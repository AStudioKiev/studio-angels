@extends('layouts.admin')

@section('body')

    <div class="main-grid admin-grid">
        <div class="white-blur">
            <h2 class="header-float-top">Админ панель</h2>

            <div class="admin-holder table-responsive">
                <a href="{{url('admin/lessons')}}">
                    <button id="blogBtn" name="add-new-btn" class="add-new-btn">Добавить урок</button>
                </a>
            </div>
        </div>
    </div>


    <table class="admin-table">
        <tr>
            <th>Понедельник</th>
            <th>Вторник</th>
            <th>Среда</th>
            <th>Четверг</th>
            <th>Пятница</th>
            <th>Суббота</th>
            <th>Воскресенье</th>
        </tr>
    </table>

    <h2 id="edit-schedule" class="admin-item green-item">Сохранить</h2>

@stop

@section('js-section')
    <script>
        $('#edit-schedule').on( "click", function() {
            $('table tr td').each(function() {
                var data = {
                    action: 'edit-schedule',
                    id: $(this).find("input[name='id']").val(),
                    time: $(this).find("input[name='time']").val(),
                    name: $(this).find("input[name='name']").val(),
                    number: $(this).find("input[name='number']").val()
                };

                $.ajax({
                    url: 'index.php',
                    type: 'POST',
                    data: data,
                    error: function () {
                        console.log('err');
                    }
                });
            });
        });
    </script>
@stop
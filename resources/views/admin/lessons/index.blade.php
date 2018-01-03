@extends('layouts.admin')

@section('body')
    <h2 class="header-float-top">Админ панель</h2>

    <div class="admin-holder table-responsive">
        <table class="table admin-table lesson-table">
            <a href="{{url('admin/lessons/add')}}">
                <button id="blogBtn" name="add-new-btn" class="add-new-btn">Добавить урок</button>
            </a>
            <button id="save-lessons" name="add-new-btn" class="add-new-btn">Сохранить изменения</button>
            <thead>
            <tr>
                <th scope="col">Понедельник</th>
                <th scope="col">Вторник</th>
                <th scope="col">Среда</th>
                <th scope="col">Четверг</th>
                <th scope="col">Пятница</th>
                <th scope="col">Суббота</th>
                <th scope="col">Воскресенье</th>
            </tr>
            </thead>
            <tbody>
            {{ csrf_field() }}

            @for ($i = 0; $i < $lessons['max_count']; $i++)

            <tr>
                @if (count($lessons['Понедельник']) > $i)
                <td>
                    <input class="lesson-input" type="text" name="time" value="{{$lessons['Понедельник'][$i]->time}}">
                    <input class="lesson-input" type="text" name="name" value="{{$lessons['Понедельник'][$i]->name}}">
                    <input class="lesson-input" type="hidden" name="id" value="{{$lessons['Понедельник'][$i]->id}}">
                    <a href="{{url('/admin/lessons/edit', $lessons['Понедельник'][$i]->id)}}" class="admin-item green-item">Редактировать</a>
                    <span class="delete-item admin-item red-item" data-toggle="modal" data-target="#myModal" data-id="{{$lessons['Понедельник'][$i]->id}}">Удалить</span>
                </td>
                @else
                    <td></td>
                @endif

                @if (count($lessons['Вторник']) > $i)
                <td>
                    <input class="lesson-input" type="text" name="time" value="{{$lessons['Вторник'][$i]->time}}">
                    <input class="lesson-input" type="text" name="name" value="{{$lessons['Вторник'][$i]->name}}">
                    <input class="lesson-input" type="hidden" name="id" value="{{$lessons['Вторник'][$i]->id}}">
                    <a href="{{url('/admin/lessons/edit', $lessons['Вторник'][$i]->id)}}" class="admin-item green-item">Редактировать</a>
                    <span class="delete-item admin-item red-item" data-toggle="modal" data-target="#myModal" data-id="{{$lessons['Вторник'][$i]->id}}">Удалить</span>
                </td>
                @else
                    <td></td>
                @endif

                @if (count($lessons['Среда']) > $i)
                <td>
                    <input class="lesson-input" type="text" name="time" value="{{$lessons['Среда'][$i]->time}}">
                    <input class="lesson-input" type="text" name="name" value="{{$lessons['Среда'][$i]->name}}">
                    <input class="lesson-input" type="hidden" name="id" value="{{$lessons['Среда'][$i]->id}}">
                    <a href="{{url('/admin/lessons/edit', $lessons['Среда'][$i]->id)}}" class="admin-item green-item">Редактировать</a>
                    <span class="delete-item admin-item red-item" data-toggle="modal" data-target="#myModal" data-id="{{$lessons['Среда'][$i]->id}}">Удалить</span>
                </td>
                @else
                    <td></td>
                @endif

                @if (count($lessons['Четверг']) > $i)
                <td>
                    <input class="lesson-input" type="text" name="time" value="{{$lessons['Четверг'][$i]->time}}">
                    <input class="lesson-input" type="text" name="name" value="{{$lessons['Четверг'][$i]->name}}">
                    <input class="lesson-input" type="hidden" name="id" value="{{$lessons['Четверг'][$i]->id}}">
                    <a href="{{url('/admin/lessons/edit', $lessons['Четверг'][$i]->id)}}" class="admin-item green-item">Редактировать</a>
                    <span class="delete-item admin-item red-item" data-toggle="modal" data-target="#myModal" data-id="{{$lessons['Четверг'][$i]->id}}">Удалить</span>
                </td>
                @else
                    <td></td>
                @endif

                @if (count($lessons['Пятница']) > $i)
                <td>
                    <input class="lesson-input" type="text" name="time" value="{{$lessons['Пятница'][$i]->time}}">
                    <input class="lesson-input" type="text" name="name" value="{{$lessons['Пятница'][$i]->name}}">
                    <input class="lesson-input" type="hidden" name="id" value="{{$lessons['Пятница'][$i]->id}}">
                    <a href="{{url('/admin/lessons/edit', $lessons['Пятница'][$i]->id)}}" class="admin-item green-item">Редактировать</a>
                    <span class="delete-item admin-item red-item" data-toggle="modal" data-target="#myModal" data-id="{{$lessons['Пятница'][$i]->id}}">Удалить</span>
                </td>
                @else
                    <td></td>
                @endif

                @if (count($lessons['Суббота']) > $i)
                <td>
                    <input class="lesson-input" type="text" name="time" value="{{$lessons['Суббота'][$i]->time}}">
                    <input class="lesson-input" type="text" name="name" value="{{$lessons['Суббота'][$i]->name}}">
                    <input class="lesson-input" type="hidden" name="id" value="{{$lessons['Суббота'][$i]->id}}">
                    <a href="{{url('/admin/lessons/edit', $lessons['Суббота'][$i]->id)}}" class="admin-item green-item">Редактировать</a>
                    <span class="delete-item admin-item red-item" data-toggle="modal" data-target="#myModal" data-id="{{$lessons['Суббота'][$i]->id}}">Удалить</span>
                </td>
                @else
                    <td></td>
                @endif

                @if (count($lessons['Воскресенье']) > $i)
                <td>
                    <input class="lesson-input" type="text" name="time" value="{{$lessons['Воскресенье'][$i]->time}}">
                    <input class="lesson-input" type="text" name="name" value="{{$lessons['Воскресенье'][$i]->name}}">
                    <input class="lesson-input" type="hidden" name="id" value="{{$lessons['Воскресенье'][$i]->id}}">
                    <a href="{{url('/admin/lessons/edit', $lessons['Воскресенье'][$i]->id)}}" class="admin-item green-item">Редактировать</a>
                    <span class="delete-item admin-item red-item" data-toggle="modal" data-target="#myModal" data-id="{{$lessons['Воскресенье'][$i]->id}}">Удалить</span>
                </td>
                @else
                    <td></td>
                @endif
            </tr>

            @endfor
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
                url: "{{url('admin/lessons/delete')}}",
                type: 'POST',
                data: data,
                error: function (result) {
                    console.log('err: ', result);
                },
                success: function (result) {
                    alert('Занятие удалено!');
                    location.reload();
                }
            });
        });

        // Save schedule changes
        $('#save-lessons').on( "click", function() {
            $('table tr td').each(function() {
                var data = {
                    data_id: $(this).find("input[name='id']").val(),
                    time: $(this).find("input[name='time']").val(),
                    name: $(this).find("input[name='name']").val(),
                    _token: $("input[name*='_token']").val()
                };

                $.ajax({
                    url: '{{url('admin/lessons/edit')}}',
                    type: 'POST',
                    data: data,
                    error: function () {
                        console.log('err');
                    }
                });
            });
            alert('Изменения сохранены!');
            location.reload();
        });
    </script>
@stop
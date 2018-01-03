@extends('layouts.admin')

@section('body')
    <h2 class="header-float-top">Админ панель</h2>
    <div class="form-holder">
        <form method="post" id="insideForm" class="form">
            {{ csrf_field() }}
            <div class="select-wrapper">
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <select name="day">
                        <option disabled>Выберите день</option>
                        <option value="Понедельник">Понедельник</option>
                        <option value="Вторник">Вторник</option>
                        <option value="Среда">Среда</option>
                        <option value="Четверг">Четверг</option>
                        <option value="Пятница">Пятница</option>
                        <option value="Суббота">Суббота</option>
                        <option value="Воскресенье">Воскресенье</option>
                    </select>
                </div>
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <input type="text" name="time" required placeholder="Время (12:00)" class="form-control input-field" value="{{$lesson->time}}">
                </div>
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <input type="text" name="name" required placeholder="Название" class="form-control input-field" value="{{$lesson->name}}">
                </div>
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <input type="text" name="teacher" required placeholder="Преподаватель" class="form-control input-field" value="{{$lesson->teacher}}">
                </div>
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <input type="number" name="max_students" required placeholder="Максимальное количество учасников" class="form-control input-field" value="{{$lesson->max_students}}">
                </div>
                <div class="select form-group mar-tp-1 mar-bt-2">
                    <select name="date">
                        <option disabled>Выберите неделю</option>
                        <option value="0">Текущая</option>
                        <option value="1">Следующая</option>
                    </select>
                </div>
            </div>

            <input type="submit" value="Сохранить">
        </form>
    </div>
@stop

@section('js-section')
<script>
    $(document).ready(function () {
        $("select[name*='day'] option[value*='{{$lesson->day}}']").attr('selected', 'selected');
        $("select[name*='date'] option[value*='{{$lesson->date}}']").attr('selected', 'selected');
    });
</script>
@stop
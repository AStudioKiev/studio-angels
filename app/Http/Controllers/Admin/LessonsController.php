<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;

use App\Lesson;

class LessonsController extends Controller
{
    public function index()
    {
        $lessons = [];
        $lessons['Понедельник'] = Lesson::where('day', 'Понедельник')->orderBy('time', 'asc')->get();
        $lessons['Вторник'] = Lesson::where('day', 'Вторник')->orderBy('time', 'asc')->get();
        $lessons['Среда'] = Lesson::where('day', 'Среда')->orderBy('time', 'asc')->get();
        $lessons['Четверг'] = Lesson::where('day', 'Четверг')->orderBy('time', 'asc')->get();
        $lessons['Пятница'] = Lesson::where('day', 'Пятница')->orderBy('time', 'asc')->get();
        $lessons['Суббота'] = Lesson::where('day', 'Суббота')->orderBy('time', 'asc')->get();
        $lessons['Воскресенье'] = Lesson::where('day', 'Воскресенье')->orderBy('time', 'asc')->get();

        $lessons['max_count'] = max(
            Lesson::where('day', 'Понедельник')->count(),
            Lesson::where('day', 'Вторник')->count(),
            Lesson::where('day', 'Среда')->count(),
            Lesson::where('day', 'Четверг')->count(),
            Lesson::where('day', 'Пятница')->count(),
            Lesson::where('day', 'Суббота')->count(),
            Lesson::where('day', 'Воскресенье')->count()
        );

        return view('admin.lessons.index', compact('lessons'));
    }

    public function addIndex()
    {
        return view('admin.lessons.add');
    }

    public function add()
    {
        Lesson::create(Request::all());
        return redirect('admin/lessons');
    }

    public function editIndex($id)
    {
        $lesson = Lesson::find($id);
        return view('admin.lessons.edit', compact('lesson'));
    }

    public function edit($id)
    {
        $lesson = Lesson::find($id);

        $lesson->day = Request::get('day');
        $lesson->time = Request::get('time');
        $lesson->name = Request::get('name');
        $lesson->teacher = Request::get('teacher');
        $lesson->max_students = Request::get('max_students');
        $lesson->date = Request::get('date');

        $lesson->update();

        return redirect('admin/lessons');
    }

    public function editAll()
    {
        $lesson = Lesson::find(Request::get('data_id'));

        $lesson->time = Request::get('time');
        $lesson->name = Request::get('name');

        $lesson->update();
    }

    public function delete()
    {
        return Lesson::destroy(Request::get('data_id'));
    }
}

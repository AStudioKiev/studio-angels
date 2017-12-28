<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;

use App\Lesson;

class LessonsController extends Controller
{
    public function index()
    {
        return view('admin.lessons.index');
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

    public function edit()
    {
        $lesson = Lesson::find(Request::get('data_id'));

        $lesson->day = Request::get('day');
        $lesson->time = Request::get('time');
        $lesson->name = Request::get('name');
        $lesson->teacher = Request::get('teacher');
        $lesson->max_students = Request::get('max_students');
        $lesson->date = Request::get('date');

        $lesson->update();

        return redirect('admin/lessons');
    }

    public function delete()
    {
        return Lesson::destroy(Request::get('data_id'));
    }
}

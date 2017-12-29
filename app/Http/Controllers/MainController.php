<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;

use App\Lesson;

class MainController extends Controller
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

        return view('index', compact('lessons'));
    }

    public function blog()
    {
        return view('blog');
    }
}

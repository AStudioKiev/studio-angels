<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Request;

use App\PageComment;
use App\Lesson;
use App\Post;

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

        $pageComments = PageComment::limit(2)->get();

        return view('index', compact('lessons', 'pageComments'));
    }

    public function blog()
    {
        $posts = Post::orderBy('counter')->get();
        return view('blog', compact('posts'));
    }

    public function article($id)
    {
        $post = Post::find($id);
        $post->counter++;
        $post->update();

        return view('article', compact('post'));
    }

    public function getComments()
    {
        $result = [];

        $page = Request::get('page');
        $pageNum = (int)Request::get('page_num');
        $limit = (int)Request::get('limit');

        $count = PageComment::where('page', $page)->count();
        $lastPage = ceil($count / $limit);

        if($lastPage < $pageNum)
        {
            $pageNum = 1;
            $result['page_num'] = 1;
        }
        elseif ($pageNum < 1)
        {
            $pageNum = $lastPage;
            $result['page_num'] = $lastPage;
        }
        else
            $result['page_num'] = $pageNum;

        $skip = ($pageNum - 1) * $limit;

        $result['comments']= DB::table('page_comments')->skip($skip)->take($limit)->get(['author', 'comment']);

        return $result;
    }
}

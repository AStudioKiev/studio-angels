<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.index')->with('posts', $posts);
    }

    public function addPostIndex()
    {
        $arr = [1, 2, 3, 4 ,5, 6];
        $name = 'Alex';
        $age = 25;

        return view('admin.post', compact('name','age', 'arr'));
    }

    public function editPostIndex()
    {
        return view('admin.post');
    }
}

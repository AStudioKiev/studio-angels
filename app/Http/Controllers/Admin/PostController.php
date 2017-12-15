<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index')->with('posts', $posts);
    }

    public function addIndex()
    {
        return view('admin.post.add-post');
    }

    public function add()
    {
        $inputs = Request::all();

        if(Request::hasFile('image'))
        {
            do {
                $name = $this->getRandomName();
                $name .= substr($_FILES['image']['name'], strrpos($_FILES['image']['name'], '.'));

            } while(file_exists(public_path() . '/uploads/posts/' . $name));

            $file = Request::file('image');
            $file->move(public_path() . '/uploads/posts/', $name);
            $inputs['image'] = 'uploads/posts/' . $name;
        }

        Post::create($inputs);
        return redirect('/admin/post');
    }

    public function editIndex($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit-post', compact('post'));
    }

    public function edit()
    {

    }

    private function getRandomName()
    {
        $str = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789';
        $name = '';

        for ($i = 0; $i < 22; $i++)
            $name .= $str[mt_rand(0, 71)];

        return $name;
    }
}
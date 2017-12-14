<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use Request;
use App\Post;

class PostController extends Controller
{
    public function addIndex()
    {
        return view('admin.add-post');
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
        return redirect('/admin');
    }

    public function editIndex($id)
    {
        $post = Post::find($id);
        return view('admin.edit-post')->with("id", $id);
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
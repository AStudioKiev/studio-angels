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
        return view('admin.post.index', compact('posts'));
    }

    public function addIndex()
    {
        return view('admin.post.add');
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
            $inputs['image'] = '/uploads/posts/' . $name;
        }

        Post::create($inputs);
        return redirect('/admin/post');
    }

    public function editIndex($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit', compact('post'));
    }

    public function edit()
    {
        $post = Post::find(Request::get('data-id'));

        if(Request::hasFile('image'))
        {
            $pos = strrpos($post->image, '/');
            $path = substr($post->image, 0, $pos);
            $name = substr($post->image, $pos, strlen($post->image));

            $file = Request::file('image');
            $file->move(public_path() . $path, $name);
        }

        $post->title = Request::get('title');
        $post->text = Request::get('text');
        $post->update();

        return redirect('/admin/post');
    }

    public function delete()
    {
        return Post::destroy(Request::get('data_id'));
    }

    public function basketIndex()
    {
        $posts = Post::onlyTrashed()->get();
        return view('admin.post.basket', compact('posts'));
    }

    public function basketRecover()
    {
        $post = Post::onlyTrashed()->find(Request::get('data_id'));
        return strval($post->restore());
    }

    public function basketDelete()
    {
        $post = Post::onlyTrashed()->find(Request::get('data_id'));
        return strval($post->forceDelete());
    }

    public function basketClear()
    {
        return strval(Post::onlyTrashed()->forceDelete());
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
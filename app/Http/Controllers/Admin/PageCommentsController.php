<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;

use App\PageComment;

class PageCommentsController extends Controller
{
    public function index()
    {
        $pageComments = PageComment::all();
        return view('admin.page-comments.index', compact('pageComments'));
    }

    public function addIndex()
    {
        return view('admin.page-comments.add');
    }

    public function add()
    {
        PageComment::create(Request::all());
        return redirect('admin/page-comments');
    }

    public function editIndex($id)
    {
        $pageComment = PageComment::find($id);
        return view('admin.page-comments.edit', compact('pageComment'));
    }

    public function edit($id)
    {
        $pageComment = PageComment::find($id);

        $pageComment->page = Request::get('page');
        $pageComment->author = Request::get('author');
        $pageComment->comment = Request::get('comment');

        $pageComment->update();

        return redirect('admin/page-comments');
    }

    public function delete()
    {
        return PageComment::destroy(Request::get('data_id'));
    }

    public function basketIndex()
    {

    }

    public function basketDelete()
    {

    }

    public function basketRecover()
    {

    }

    public function basketClear()
    {

    }
}
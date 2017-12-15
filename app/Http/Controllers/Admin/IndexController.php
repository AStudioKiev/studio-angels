<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}

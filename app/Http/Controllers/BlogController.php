<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BlogController extends Controller
{
    public function index()
    {
        // get all blogs
        $blogs = Blog::all();
        return view('blog', ['blogs' => $blogs]);
    }
}

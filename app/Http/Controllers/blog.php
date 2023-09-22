<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class blog extends Controller
{
    public function index()
    {
        return view('blog');
    }

    public function create()
    {
        return view('create');
    }

}

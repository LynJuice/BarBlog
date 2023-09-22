<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comment extends Controller
{
    public function index()
    {
        return view('comment');
    }

    public function create()
    {
        return view('create');
    }
}

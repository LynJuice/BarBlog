<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index()
    {
        return view('catagory');
    }

    public function create()
    {
        return view('create');
    }    
}
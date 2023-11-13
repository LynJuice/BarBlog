<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    function create()
    {
        return view('blog.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->annonymous == 1) {
            $blog->user_id = null;
        } else {
            $blog->user_id = auth()->user()->id;
        }

        // $blog->image = $request->image;
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }

    function edit(Blog $blog)
    {
        if ($blog->user_id != auth()->user()->id) {
            return redirect()->route('blog.index')->with('error', 'Šmiki šmiki, negali redaguoti nesavo blogo');
        }
        return view('blog.edit', compact('blog'));
    }

    function update(Request $request, Blog $blog)
    {
        if ($blog->user_id != auth()->user()->id) {
            return redirect()->route('blog.index')->with('error', 'Šmiki šmiki, negali redaguoti nesavo blogo');
        }

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'required',
        ]);

        $blog->title = $request->title;
        $blog->description = $request->description;
        // $blog->image = $request->image;
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully.');
    }

    function destroy(Blog $blog)
    {
        if ($blog->user_id != auth()->user()->id) {
            return redirect()->route('blog.index')->with('error', 'Šmiki šmiki, negali trinti nesavo blogo');
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully.');
    }
}

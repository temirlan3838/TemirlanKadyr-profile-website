<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog.index')->with(['posts' => $posts]);
    }

    public function store(Request $r)
    {
        Post::create([
            'id' => $r->name,
            'title' => $r->title,
            'body' => $r->body

        ]);
        return back();
    }
}

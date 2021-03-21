<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //return all posts 
    public function index(Request $r)
    {
        $posts = Post::all();
        return response($posts, 200);
    }

    public function get_post(Request $request)
    {
        $post = Post::find($request->post_id);

        if ($post == null) {
            return response(['message' => 'There is no post'], 404);
        }
        return response($post, 200);
    }
}

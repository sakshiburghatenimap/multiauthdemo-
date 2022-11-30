<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(4);
        return view('policy.index', compact('posts'));
    }

    public function show(Post $post)
    {
       
        return  view('policy.show')->with('post', $post);
    }
}

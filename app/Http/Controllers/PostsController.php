<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->simplePaginate(3);
		return view('blog.index',compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('blog.show', compact('post'));
    }
}

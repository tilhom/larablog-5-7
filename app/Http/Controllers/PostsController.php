<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index(Request $request)
    {
    	$posts = Post::latest()->filter(request(['month','year']))->simplePaginate(3);
        $archives = Post::archives();
		return view('blog.index')->with('posts',$posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('blog.show', compact('post'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index(Request $request)
    {
    	$posts = Post::latest();
        if (isset($request['month'])){
            $posts=$posts->whereMonth('created_at', Carbon::parse($request['month'])->month);
        } 
        if (isset($request['year'])){
             $posts=$posts->whereYear('created_at', $request['year']);
        }
        $posts=$posts->simplePaginate(3);
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published ')
        ->groupBy('year','month')
        ->orderByRaw('created_at desc')
        ->get()
        ->toArray();
        //dd($archives);
		return view('blog.index',compact('posts','archives'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('blog.show', compact('post'));
    }
}

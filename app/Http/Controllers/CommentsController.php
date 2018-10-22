<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Mail\Welcome;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
	public function store(Post $post)
	{
		// Comment::create([
		// 	'comment' => request('comment'),
		// 	'post_id' => $post->id
		// ]);
         //dd(request('email'));
    	$comment = $post->addComments(request());
        \Mail::to(request('email'))->send(new Welcome($post,$comment));
    	// $this->validate(
    	// 	request(), 
    	// 	['body'=>'required|min:2'],
    	// 	[
    	// 		'body.required' => 'Izoh to\'ldirilishi kerak',
    	// 		'body.min' => 'Izohga kamida 2 xarf to\'ldirilishi kerak'
    	// 	]
    	// );
    	// $post->comments()->create(['body'=>request('body')]);
        
		return back();
	}
}

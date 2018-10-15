<?php

namespace App\Http\Controllers;

use App\Comment;
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

    	$post->addComments(request('comment'));
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

<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['comment', 'post_id'];
	// protected $guarded = [];
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}

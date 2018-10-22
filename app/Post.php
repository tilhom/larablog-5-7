<?php

namespace App;

use App\Comment;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,$filter)
    {
    	if (isset($filter['month'])){
            $query->whereMonth('created_at', Carbon::parse($filter['month'])->month);
        } 
        if (isset($filter['year'])){
             $query->whereYear('created_at', $filter['year']);
        }
    }

    public static function archives()
    {
    	return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published ')
        ->groupBy('year','month')
        ->orderByRaw('created_at desc')
        ->get()
        ->toArray();
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function addComments($request)
    {
        //dd($request->all());
    	$comment = $this->comments()->create($request->all());
        return $comment->comment;
        
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class);
    }
}

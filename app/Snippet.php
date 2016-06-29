<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    public $fillable = ['title', 'description', 'html', 'css', 'javascript'];

    public function getHtmlAttribute($content)
    {
    	return trim($content);
    }

    public function getCssAttribute($content)
    {
    	return trim($content);
    }

    public function getJavascriptAttribute($content)
    {
    	return trim($content);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function tags()
    {
    	return $this->hasMany(Tag::class);
    }
}

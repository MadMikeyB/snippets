<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function snippets()
    {
    	return $this->hasMany(Snippet::class);
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

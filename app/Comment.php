<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public $fillable = ['content'];
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function snippet()
	{
		return $this->belongsTo(Snippet::class);
	}
}

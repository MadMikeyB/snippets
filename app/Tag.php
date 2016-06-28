<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	public $fillable = ['name'];

	public function snippet()
	{
		return $this->belongsTo(Snippet::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

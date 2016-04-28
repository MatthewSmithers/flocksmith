<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chicken extends Model
{
	/**
	*   A Doc Block.
	*/
	public function breeds()
	{
		return $this->belongsTo(Breed::class);
	}
}

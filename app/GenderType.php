<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenderType extends Model
{
	protected $fillable = [
			'gender_type',
		];
	/**
	*   A Doc Block.
	*/
	public function individual()
	{
	    return $this->hasOne(individual::class);
	}
}

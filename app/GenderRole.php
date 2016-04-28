<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenderRole extends Model
{
	protected $fillable = [
			'gender_role',
		];
	/**
	*   A Doc Block.
	*/
	public function individual()
	{
		return $this->belongsTo(Individual::class);
	}
}

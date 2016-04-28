<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
	protected $fillable = [
			'classification',
		];

	/**
	*   A Doc Block.
	*/
	public function PoultryTypes()
	{
		return $this->belongsToMany(PoultryType::class);
	}
}

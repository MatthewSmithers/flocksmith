<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
	protected $fillable = [
			'relationship',
		];

	/**
	*   Sires.
	*/
	public function sire()
	{
		return $this->hasMany(Individual::class);
	}

}

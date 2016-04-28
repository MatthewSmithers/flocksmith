<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
	protected $fillable = [
			'standard_weight',
		];

	/**
	*   A Doc Block.
	*/
	public function gravitationalForce()
	{
		$this->belongsTo(Individual::class);
	}

	$standardWeights = array(
		'' => , 
		);
}

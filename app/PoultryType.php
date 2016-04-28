<?php

namespace App;

use App\Breed;
use Illuminate\Database\Eloquent\Model;

class PoultryType extends Model
{
	protected $fillable = [
			'poultry_type';
		];

	/**
	*   A Chicken, Duck, or Turkey can have many breeds.
	*/
	public function breeds()
	{
		return $this->hasMany(Breed::class);
	}

	/**
	*   A Chicken, Duck, or Turkey can have many classifications (American, Oriental, Dutch, etc.)
	*/
	public function classifications()
	{
		return $this->hasMany(PoultryClassification::class);
	}
}

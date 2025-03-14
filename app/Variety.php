<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
	protected $fillable = [
			'variety',
		];

	/**
	*   A variety belongs to many breeds (Buff Brahma, Buff Orpington).
	*/
	public function breeds()
	{
		return $this->belongsToMany(Breed::class);
	}
	$varieties = [
		'American',
		'Barred',
		'Bearded Black',
		'Bearded Blue',
		'Bearded Buff',
		'Bearded Buff Laced',
		'Bearded Gray',
		'Bearded Golden',
		'Bearded Golden Neck',
		'Bearded Mille Fleur',
		'Bearded Mottled',
		'Bearded Partridge',
		'Bearded Porcelain',
		'Bearded Self Blue',
		'Bearded Silver',
		'Bearded Splash',
		'Bearded White',
		'Beltsville Small White',
		'Birchen',
		'Black',
		'Black Frizzle',
		'Black & White',
		'Black Breasted Red',
		'Black Tailed Buff',
		'Black Tailed Red',
		'Blue',
		'Blue & White',
		'Blue Brassy Back',
		'Blue Breasted Red',
		'Blue Cream Light Brown',
		'Blue Golden Duckwing',
		'Blue Laced Red',
		'Blue Light Brown Dutch',
		'Blue Silver Duckwing',
		'Blue Wheaten',
		'Bourbon Red',
		'Butterscotch',
		'Brassy Back',
		'Bronze',
		'Brown',
		'Brown Red',
		'Buff',
		'Buff Columbian',
		'Chocolate',
		'Colored',
		'Columbian',
		'Cream Light Brown',
		'Crele',
		'Cuckoo',
		'Cumberland Blue',
		'Dark',
		'Dark Brown',
		'Eastern',
		'Fawn & White',
		'Fawn Silver Duckwing',
		'Ginger Red',
		'Golden',
		'Golden Duckwing',
		'Golden Penciled',
		'Golden Laced',
		'Golden Spangled',
		'Gray',
		'Khaki',
		'Lavender',
		'Lemon Blue',
		'Light',
		'Light Brown',
		'Partridge',
		'Pastel',
		'Pearl',
		'Penciled',
		'Porcelain',
		'Narragansett',
		'Mille Fleur',
		'Mottled',
		'Non Bearded Black',
		'Non Bearded Blue',
		'Non Bearded Buff',
		'Non Bearded Buff Laced',
		'Non Bearded Gray',
		'Non Bearded Golden',
		'Non Bearded Partridge',
		'Non Bearded Silver',
		'Non Bearded White',
		'Non Bearded White Crested Black',
		'Non Bearded White Crested Blue',
		'Non Bearded Black Crested White',
		'Quail',
		'Red',
		'Red Pyle',
		'Red Shouldered',
		'Rose Comb',
		'Rose Comb Black',
		'Rose Comb Buff',
		'Rose Comb Cuckoo',
		'Rose Comb Golden',
		'Rose Comb Silver',
		'Rose Comb White',
		'Royal Palm',
		'Saddleback',
		'Salmon',
		'Self Blue',
		'Sex Linked',
		'Silver',
		'Silver Blue',
		'Silver Duckwing',
		'Silver Gray',
		'Silver Laced',
		'Silver Penciled',
		'Silver Spangled',
		'Single Comb',
		'Single Comb Black',
		'Single Comb Black Tailed Red';
		'Single Comb Buff',
		'Single Comb Columbian',
		'Single Comb Cuckoo',
		'Single Comb Dark Brown',
		'Single Comb Light Brown',
		'Single Comb Red',
		'Single Comb Silver',
		'Slate',
		'Snowy',
		'Speckled',
		'Tufted',
		'Wheaten',
		'White',
		'White Holland',
		'White Laced Red',
	];
}

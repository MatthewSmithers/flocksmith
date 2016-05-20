<?php

namespace App;

use App\Breed;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
	protected $fillable = [
			'breed',
			'year_admitted',
			'poultry_type_id',
		];

	/**
	*	A Breed have more than one classification 
	*	(leghorns == mediterranean, bantam, singlecomb, etc.).
	*/
	public function classification()
	{
		return $this->belongsToMany(Classification::class);
	}

	/**
	*   A Doc Block.
	*/
	public function poultryType()
	{
		return $this->belongsTo(PoultryType::class);
	}

	$breeds = [
		'African',
		'Ameraucanas',
		'Anconas',
		'Andalusians',
		'Araucanas',
		'Aseels',
		'Australorps',
		'Aylesbury',
		'Bantams',
		'Barnevelders',
		'Belgian Bearded d\'Anvers',
		'Belgian Bearded d\'Uccle',
		'Brahmas',
		'Buckeyes',
		'Buff',
		'Booted',
		'Call',
		'Cambell',
		'Campines',
		'Canada',
		'Catalanas',
		'Cayuga',
		'Chanteclers',
		'Chinese',
		'Cochins',
		'Cornish',
		'Crested',
		'Crevecoeurs',
		'Cubalayas',
		'Delawares',
		'Dominiques',
		'Dorkings',
		'Dutch',
		'East Indie',
		'Egyptian',
		'Embden',
		'Faverolles',
		'Games',
		'Japanese',
		'Javas',
		'Jersey Giants',
		'Hamburgs',
		'Hollands',
		'Houdans',
		'La Fleche',
		'Lakenvelders',
		'Lamonas',
		'Langshans',
		'Leghorns',
		'Magpie',
		'Malays',
		'Mallard',
		'Minorcas',
		'Modern Games',
		'Muscovy',
		'Naked Necks',
		'New Hampshires',
		'Orpingtons',
		'Old English Games',
		'Pekin',
		'Plymouth Rocks',
		'Phoenix',
		'Polish',
		'Pilgrim',
		'Red Caps',
		'Rhode Island Reds',
		'Rhode Island Whites',
		'Rouen',
		'Runner',
		'Pomeranian',
		'Saxony',
		'Sebastopol',
		'Sebrights',
		'Shamos',
		'Sicilian Buttercups',
		'Silkies',
		'Appleyard',
		'Sultans',
		'Sumatras',
		'Sussex',
		'Swedish',
		'Toulouse',
		'Roman',
		'Welsh Harlequin',
		'Wellsummers',
		'White Faced Black Spanish',
		'Wyandottes',
		'Yokohamas',
	];
}

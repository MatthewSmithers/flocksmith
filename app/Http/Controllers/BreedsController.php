<?php

namespace App\Http\Controllers;

use App\Breed;
use Illuminate\Http\Request;

use App\Http\Requests;

class BreedsController extends Controller
{
	/**
    *   Showing all breeds.
    */
	public function index()
	{
		$breeds = Breed::all();
		return view('breeds.index', compact('breeds'));
	}

	/**
	*   Show a single breed.
	*/
	public function show(Breed $breed)
	{
		// return $breed;
		return view('breeds.show', compact('breed'));
	}
}

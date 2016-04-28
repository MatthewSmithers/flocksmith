<?php

namespace App\Http\Controllers;

use App\Breed;
use App\Chicken;
use Illuminate\Http\Request;

use App\Http\Requests;

class ChickensController extends Controller
{
	/**
	*   A Doc Block.
	*/
	public function store(Request $request Breed $breed)
	{
		$chicken = new Chicken;
		$chicken->name = $request->name;
		$breed->chickens = save($chicken);
		return back();
	}
}

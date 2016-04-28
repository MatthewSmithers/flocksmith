<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    /**
    *   The home page.
    */
    public function home()
    {
        return view('welcome');
    }

    /**
    *   A Doc Block.
    */
    public function about()
    {
        return view('pages.about');
    }
}

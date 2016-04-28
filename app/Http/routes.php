<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');

Route::get('breeds', 'BreedsController@index');
Route::get('breeds/{breed}', 'BreedsController@show');
Route::post('breeds/{breed}/chickens', 'ChickensController@store');
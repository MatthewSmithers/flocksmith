<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PoultryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //delete poultry table records
         DB::table('poultry')->delete();

         //insert some poultry records
         DB::table('poultry')->insert([
            //LARGE AMERICAN CHICKENS

         	//Plymouth Rocks
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 2, 'breed_id' => 62, 'year_admitted' => 1874],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 131, 'breed_id' => 62, 'year_admitted' => 1888],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 42, 'breed_id' => 62, 'year_admitted' => 1894],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 111, 'breed_id' => 62, 'year_admitted' => 1907],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 83, 'breed_id' => 62, 'year_admitted' => 1910],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 46, 'breed_id' => 62, 'year_admitted' => 1910],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 26, 'breed_id' => 62, 'year_admitted' => 1920],
         	//Dominiques
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => NULL, 'breed_id' => 32, 'year_admitted' => 1874],
         	//Wyandottes
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 110, 'breed_id' => 85, 'year_admitted' => 1883],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 60, 'breed_id' => 85, 'year_admitted' => 1888],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 131, 'breed_id' => 85, 'year_admitted' => 1888],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 20, 'breed_id' => 85, 'year_admitted' => 1893],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 42, 'breed_id' => 85, 'year_admitted' => 1893],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 83, 'breed_id' => 85, 'year_admitted' => 1901],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 111, 'breed_id' => 85, 'year_admitted' => 1902],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 46, 'breed_id' => 85, 'year_admitted' => 1905],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 26, 'breed_id' => 85, 'year_admitted' => 1977],
         	//Javas
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 20, 'breed_id' => 41, 'year_admitted' => 1883],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 69, 'breed_id' => 41, 'year_admitted' => 1883],
         	//Rhode Island Reds
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 111, 'breed_id' => 66, 'year_admitted' => 1904],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 92, 'breed_id' => 66, 'year_admitted' => 1905],
         	//Rhode Island Whites
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 92, 'breed_id' => 68, 'year_admitted' => 1922],
         	//Buckeys
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => NULL, 'breed_id' => 14, 'year_admitted' => 1904],
         	//Chanteclers
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 131, 'breed_id' => 24, 'year_admitted' => 1921],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 83, 'breed_id' => 24, 'year_admitted' => 1935],
         	//Jersey Giants
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 20, 'breed_id' => 42, 'year_admitted' => 1922],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 131, 'breed_id' => 42, 'year_admitted' => 1947],
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 26, 'breed_id' => 42, 'year_admitted' => 2003],
         	//Lamonas
         	['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 131, 'breed_id' => 48, 'year_admitted' => 1933],
            //New Hampshires
            ['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => NULL, 'breed_id' => 58, 'year_admitted' => 1933],
            //Hollands
            ['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 2, 'breed_id' => 44, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => 131, 'breed_id' => 44, 'year_admitted' => 1949],
            //Delawares
            ['poultry_type_id' => 1, 'classification_id' => 1, 'variety_id' => NULL, 'breed_id' => 31, 'year_admitted' => 1952],

            //LARGE ASIATIC CHICKENS
            //Brahmas
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 66, 'breed_id' => 13, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 51, 'breed_id' => 13, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 42, 'breed_id' => 13, 'year_admitted' => 1933],
            //Cochins
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 42, 'breed_id' => 26, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 83, 'breed_id' => 26, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 131, 'breed_id' => 26, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 20, 'breed_id' => 26, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 110, 'breed_id' => 26, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 60, 'breed_id' => 26, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 26, 'breed_id' => 26, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 40, 'breed_id' => 26, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 2, 'breed_id' => 26, 'year_admitted' => 1965],
            //Lanshans
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 20, 'breed_id' => 49, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 131, 'breed_id' => 49, 'year_admitted' => 1893],
            ['poultry_type_id' => 1, 'classification_id' => 2, 'variety_id' => 26, 'breed_id' => 49, 'year_admitted' => 1987],

            //LARGE ENGLISH CHICKENS
            //Dorkings
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 131, 'breed_id' => 33, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 109, 'breed_id' => 33, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 45, 'breed_id' => 33, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 89, 'breed_id' => 33, 'year_admitted' => 1995],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 49, 'breed_id' => 33, 'year_admitted' => 1998],
            //Redcaps
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => NULL, 'breed_id' => 66, 'year_admitted' => 1888],
            //Cornish
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 51, 'breed_id' => 27, 'year_admitted' => 1893],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 131, 'breed_id' => 27, 'year_admitted' => 1898],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 133, 'breed_id' => 27, 'year_admitted' => 1909],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 42, 'breed_id' => 27, 'year_admitted' => 1938],
            //Orpingtons
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 51, 'breed_id' => 59, 'year_admitted' => 1902],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 20, 'breed_id' => 59, 'year_admitted' => 1905],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 131, 'breed_id' => 59, 'year_admitted' => 1905],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 26, 'breed_id' => 59, 'year_admitted' => 1923],
            //Sussex
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 128, 'breed_id' => 79, 'year_admitted' => 1914],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 89, 'breed_id' => 79, 'year_admitted' => 1914],
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 66, 'breed_id' => 79, 'year_admitted' => 1929],
            //Australorps
            ['poultry_type_id' => 1, 'classification_id' => 3, 'variety_id' => 20, 'breed_id' => 8, 'year_admitted' => 1929],

            // LARGE MEDITERRANEAN CHICKENS
            //Leghorns
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 114, 'breed_id' => 50, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 119, 'breed_id' => 50, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 121, 'breed_id' => 50, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 124, 'breed_id' => 50, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 119, 'breed_id' => 50, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 121, 'breed_id' => 50, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 100, 'breed_id' => 50, 'year_admitted' => 1886],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 116, 'breed_id' => 50, 'year_admitted' => 1894],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 123, 'breed_id' => 50, 'year_admitted' => 1894],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 122, 'breed_id' => 50, 'year_admitted' => 1929],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 115, 'breed_id' => 50, 'year_admitted' => 1929],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 117, 'breed_id' => 50, 'year_admitted' => 1929],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 93, 'breed_id' => 50, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 94, 'breed_id' => 50, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 123, 'breed_id' => 50, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 120, 'breed_id' => 50, 'year_admitted' => 1981],
            //Minorcas
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 114, 'breed_id' => 54, 'year_admitted' => 1888],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 93, 'breed_id' => 54, 'year_admitted' => 1904],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 124, 'breed_id' => 54, 'year_admitted' => 1888],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 100, 'breed_id' => 54, 'year_admitted' => 1914],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 116, 'breed_id' => 54, 'year_admitted' => 1913],
            //White Faced Black Spanish
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => NULL, 'breed_id' => 84, 'year_admitted' => 1874],
            //Andalusians
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 26, 'breed_id' => 3, 'year_admitted' => 1874],
            //Anconas
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 113, 'breed_id' => 4, 'year_admitted' => 1898],
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 92, 'breed_id' => 4, 'year_admitted' => 1898],
            //Sicilian Buttercups
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => NULL, 'breed_id' => 75, 'year_admitted' => 1918],
            //Catalanas
            ['poultry_type_id' => 1, 'classification_id' => 4, 'variety_id' => 42, 'breed_id' => 22, 'year_admitted' => 1949],

            //LARGE CONTINENTAL CHICKENS
            //*Northern European*
            //Barnevelders
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => NULL, 'breed_id' => 10, 'year_admitted' => 1991],
            //Campines
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => 106, 'breed_id' => 20, 'year_admitted' => 1914],
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => 57, 'breed_id' => 20, 'year_admitted' => 1914],
            //Hamburgs
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => 61, 'breed_id' => 43, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => 112, 'breed_id' => 43, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => 59, 'breed_id' => 43, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => 111, 'breed_id' => 43, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => 131, 'breed_id' => 43, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => 20, 'breed_id' => 43, 'year_admitted' => 1874],
            //Lakenvelders
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => NULL, 'breed_id' => 47, 'year_admitted' => 1939],
            //Welsummers
            ['poultry_type_id' => 1, 'classification_id' => 5, 'variety_id' => NULL, 'breed_id' => 83, 'year_admitted' => 1991],
            //*Polish*
            //Polish
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 81, 'breed_id' => 64, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 77, 'breed_id' => 64, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 79, 'breed_id' => 64, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 80, 'breed_id' => 64, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 8, 'breed_id' => 64, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 15, 'breed_id' => 64, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 17, 'breed_id' => 64, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 6, 'breed_id' => 64, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 75, 'breed_id' => 64, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 82, 'breed_id' => 64, 'year_admitted' => 1963],
            ['poultry_type_id' => 1, 'classification_id' => 6, 'variety_id' => 72, 'breed_id' => 64, 'year_admitted' => 1996],
            //*French*
            //Houdans
            ['poultry_type_id' => 1, 'classification_id' => 7, 'variety_id' => 69, 'breed_id' => 45, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 7, 'variety_id' => 131, 'breed_id' => 45, 'year_admitted' => 1914],
            //Crevecoeurs
            ['poultry_type_id' => 1, 'classification_id' => 7, 'variety_id' => 20, 'breed_id' => 29, 'year_admitted' => 1874],
            //La Fleche
            ['poultry_type_id' => 1, 'classification_id' => 7, 'variety_id' => 20, 'breed_id' => 46, 'year_admitted' => 1874],
            //Favorelles
            ['poultry_type_id' => 1, 'classification_id' => 7, 'variety_id' => 103, 'breed_id' => 38, 'year_admitted' => 1914],
            ['poultry_type_id' => 1, 'classification_id' => 7, 'variety_id' => 131, 'breed_id' => 38, 'year_admitted' => 1981],

            //ALL OTHER STANDARD BREEDS
            //*Games*
            //Modern Games
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 23, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 41, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 58, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 108, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 19, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 90, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 131, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 20, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 130, 'breed_id' => 55, 'year_admitted' => 1981],
            //Old English Games
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 23, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 41, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 58, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 108, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 90, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 131, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 20, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 127, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 29, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 65, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 31, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 34, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 104, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 8, 'variety_id' => 48, 'breed_id' => 60, 'year_admitted' => 1996],

            //*Orientals*
            //Sumatras
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 20, 'breed_id' => 78, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 26, 'breed_id' => 78, 'year_admitted' => 2002],
            //Malays
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 23, 'breed_id' => 52, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 127, 'breed_id' => 52, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 20, 'breed_id' => 52, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 131, 'breed_id' => 52, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 90, 'breed_id' => 52, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 130, 'breed_id' => 52, 'year_admitted' => 1981],
            //Cubalayas
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 23, 'breed_id' => 30, 'year_admitted' => 1939],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 131, 'breed_id' => 30, 'year_admitted' => 1939],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 20, 'breed_id' => 30, 'year_admitted' => 1939],
            //Phoenix
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 112, 'breed_id' => 63, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 57, 'breed_id' => 63, 'year_admitted' => 1983],
            //Yokohamas
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 131, 'breed_id' => 86, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 91, 'breed_id' => 30, 'year_admitted' => 1981],
            //Aseels
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 23, 'breed_id' => 7, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 51, 'breed_id' => 7, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 127, 'breed_id' => 7, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 131, 'breed_id' => 7, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 130, 'breed_id' => 7, 'year_admitted' => 1996],
            //Shamos
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 20, 'breed_id' => 74, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 23, 'breed_id' => 74, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 51, 'breed_id' => 74, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 9, 'variety_id' => 130, 'breed_id' => 74, 'year_admitted' => 1981],

            //*Miscellaneous*
            //Sultans
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 131, 'breed_id' => 77, 'year_admitted' => 1874],
            //Naked Necks
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 89, 'breed_id' => 57, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 131, 'breed_id' => 57, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 42, 'breed_id' => 57, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 20, 'breed_id' => 57, 'year_admitted' => 1965],
            //Araucanas
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 20, 'breed_id' => 6, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 23, 'breed_id' => 6, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 58, 'breed_id' => 6, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 108, 'breed_id' => 6, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 131, 'breed_id' => 6, 'year_admitted' => 1976],
            //Ameraucanas
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 20, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 26, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 35, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 41, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 42, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 106, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 130, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 10, 'variety_id' => 131, 'breed_id' => 2, 'year_admitted' => 1984],

            //GAME BANTAMS
            //Modern Games
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 19, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 20, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 23, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 41, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 58, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 90, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 108, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 131, 'breed_id' => 55, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 26, 'breed_id' => 55, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 29, 'breed_id' => 55, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 65, 'breed_id' => 55, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 130, 'breed_id' => 55, 'year_admitted' => 1874],
            //Old English Games
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 23, 'breed_id' => 60, 'year_admitted' => 1925],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 127, 'breed_id' => 60, 'year_admitted' => 1925],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 20, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 58, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 108, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 131, 'breed_id' => 60, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 130, 'breed_id' => 60, 'year_admitted' => 1933-1949],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 90, 'breed_id' => 60, 'year_admitted' => 1946],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 41, 'breed_id' => 60, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 23, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 31, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 34, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 65, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 104, 'breed_id' => 60, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 19, 'breed_id' => 60, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 26, 'breed_id' => 60, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 48, 'breed_id' => 60, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 49, 'breed_id' => 60, 'year_admitted' => 1977],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 56, 'breed_id' => 60, 'year_admitted' => 1982],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 88, 'breed_id' => 60, 'year_admitted' => 1988],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 38, 'breed_id' => 60, 'year_admitted' => 1990],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 28, 'breed_id' => 60, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 46, 'breed_id' => 60, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 107, 'breed_id' => 60, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 55, 'breed_id' => 60, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 68, 'breed_id' => 60, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 24, 'breed_id' => 60, 'year_admitted' => 2004],
            //American Games
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 19, 'breed_id' => 87, 'year_admitted' => 2009],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 20, 'breed_id' => 87, 'year_admitted' => 2009],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 23, 'breed_id' => 87, 'year_admitted' => 2009],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 26, 'breed_id' => 87, 'year_admitted' => 2009],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 23, 'breed_id' => 87, 'year_admitted' => 2009],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 41, 'breed_id' => 87, 'year_admitted' => 2009],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 58, 'breed_id' => 87, 'year_admitted' => 2009],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 90, 'breed_id' => 87, 'year_admitted' => 2009],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 106, 'breed_id' => 87, 'year_admitted' => 2009],
            ['poultry_type_id' => 1, 'classification_id' => 11, 'variety_id' => 131, 'breed_id' => 87, 'year_admitted' => 2009],

            //SINGLE COMB, CLEAN LEGGED, OTHER THAN GAME BANTAMS
            //Anconas
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 69, 'breed_id' => 4, 'year_admitted' => 1960],
            //Andalusians
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 26, 'breed_id' => 3, 'year_admitted' => 1960],
            //Australorps
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 8, 'year_admitted' => 1960],
            //Campines
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 57, 'breed_id' => 20, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 106, 'breed_id' => 20, 'year_admitted' => 1960],
            //Catalanas
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 42, 'breed_id' => 22, 'year_admitted' => 1960],
            //Delawares
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => NULL, 'breed_id' => 31, 'year_admitted' => 1960],
            //Dorkings
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 45, 'breed_id' => 33, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 109, 'breed_id' => 33, 'year_admitted' => 1960],
            //Dutch
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 67, 'breed_id' => 34, 'year_admitted' => 1992],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 106, 'breed_id' => 34, 'year_admitted' => 1992],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 30, 'breed_id' => 34, 'year_admitted' => 1995],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 33, 'breed_id' => 34, 'year_admitted' => 1995],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 34, 'year_admitted' => 2000],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 47, 'breed_id' => 34, 'year_admitted' => 2004],
            //Hollands
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 2, 'breed_id' => 44, 'year_admitted' => 1960],
            //Japanese
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 134, 'breed_id' => 40, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 62, 'breed_id' => 40, 'year_admitted' => 1914],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 69, 'breed_id' => 40, 'year_admitted' => 1947],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 24, 'breed_id' => 40, 'year_admitted' => 1982],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 40, 'year_admitted' => 1982],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 131, 'breed_id' => 40, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 2, 'breed_id' => 40, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 41, 'breed_id' => 40, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 130, 'breed_id' => 40, 'year_admitted' => 1996],
            //Javas
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 41, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 69, 'breed_id' => 41, 'year_admitted' => 1960],
            //Jersey Giants
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 42, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 131, 'breed_id' => 42, 'year_admitted' => 1960],
            //Lakenvelders
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => NULL, 'breed_id' => 47, 'year_admitted' => 1960],
            //Lamonas
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 131, 'breed_id' => 48, 'year_admitted' => 1960],
            //Leghorns
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 131, 'breed_id' => 50, 'year_admitted' => 1940],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 25, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 42, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 46, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 52, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 67, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 89, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 106, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 58, 'breed_id' => 50, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 2, 'breed_id' => 50, 'year_admitted' => 1995],
            //Minorcas
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 54, 'year_admitted' => 1944],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 42, 'breed_id' => 54, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 131, 'breed_id' => 54, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 42, 'breed_id' => 54, 'year_admitted' => 1965],
            //Naked Necks
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 42, 'breed_id' => 57, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 89, 'breed_id' => 57, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 57, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 131, 'breed_id' => 57, 'year_admitted' => 1965],
            //New Hampshires
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 113, 'breed_id' => 58, 'year_admitted' => 1960],
            //Orpingtons
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 59, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 23, 'breed_id' => 59, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 42, 'breed_id' => 59, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 131, 'breed_id' => 59, 'year_admitted' => 1960],
            //Phoenix
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 106, 'breed_id' => 59, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 57, 'breed_id' => 59, 'year_admitted' => 1983],
            //Plymouth Rocks
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 2, 'breed_id' => 62, 'year_admitted' => 1940],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 131, 'breed_id' => 62, 'year_admitted' => 1944],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 26, 'breed_id' => 62, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 42, 'breed_id' => 62, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 46, 'breed_id' => 62, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 83, 'breed_id' => 62, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 111, 'breed_id' => 62, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 62, 'year_admitted' => 1991],
            //Rhode Island Reds
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 113, 'breed_id' => 67, 'year_admitted' => 1940],
            //White Faced Black Spanish
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 20, 'breed_id' => 84, 'year_admitted' => 1960],
            //Sussex
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 66, 'breed_id' => 79, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 89, 'breed_id' => 79, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => 128, 'breed_id' => 79, 'year_admitted' => 1960],
            //Welsummer
            ['poultry_type_id' => 1, 'classification_id' => 12, 'variety_id' => NULL, 'breed_id' => 83, 'year_admitted' => 1995],

            //ROSE COMB CLEAN LEGGED BANTAMS
            //Anconas
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 69, 'breed_id' => 4, 'year_admitted' => 1960],
            //Belgian Bearded d'Anvers
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 20, 'breed_id' => 11, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 23, 'breed_id' => 11, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 49, 'breed_id' => 11, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 68, 'breed_id' => 11, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 69, 'breed_id' => 11, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 87, 'breed_id' => 11, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 88, 'breed_id' => 11, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 131, 'breed_id' => 11, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 104, 'breed_id' => 11, 'year_admitted' => 1981],
            //Dominques
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => NULL, 'breed_id' => 32, 'year_admitted' => 1960],
            //Dorkings
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 100, 'breed_id' => 33, 'year_admitted' => 1960],
            //Hamburgs
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 112, 'breed_id' => 43, 'year_admitted' => 1949],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 20, 'breed_id' => 43, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 59, 'breed_id' => 43, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 61, 'breed_id' => 43, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 111, 'breed_id' => 43, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 131, 'breed_id' => 43, 'year_admitted' => 1960],
            //Leghorns
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 52, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 67, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 131, 'breed_id' => 50, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 106, 'breed_id' => 50, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 20, 'breed_id' => 50, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 42, 'breed_id' => 50, 'year_admitted' => 1981],
            //Minorcas
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 20, 'breed_id' => 54, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 131, 'breed_id' => 54, 'year_admitted' => 1960],
            //Redcaps
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => NULL, 'breed_id' => 66, 'year_admitted' => 1960],
            //Rhode Island Reds
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => NULL, 'breed_id' => 67, 'year_admitted' => 1952],
            //Rhode Island Whites
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => NULL, 'breed_id' => 68, 'year_admitted' => 1960],
            //Rosecombs
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 20, 'breed_id' => 88, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 131, 'breed_id' => 88, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 26, 'breed_id' => 88, 'year_admitted' => 1960],
            //Sebrights
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 57, 'breed_id' => 73, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 106, 'breed_id' => 73, 'year_admitted' => 1874],
            //Wyandottes
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 20, 'breed_id' => 85, 'year_admitted' => 1933],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 42, 'breed_id' => 85, 'year_admitted' => 1933],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 46, 'breed_id' => 85, 'year_admitted' => 1933],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 83, 'breed_id' => 85, 'year_admitted' => 1933],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 110, 'breed_id' => 85, 'year_admitted' => 1933],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 111, 'breed_id' => 85, 'year_admitted' => 1933],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 20, 'breed_id' => 85, 'year_admitted' => 1933],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 60, 'breed_id' => 85, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 43, 'breed_id' => 85, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 13, 'variety_id' => 26, 'breed_id' => 85, 'year_admitted' => 1977],

            //ALL OTHER COMBS, CLEAN LEGGED BANTAMS
            //Ameraucanas
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 20, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 26, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 35, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 41, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 42, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 106, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 130, 'breed_id' => 2, 'year_admitted' => 1984],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 131, 'breed_id' => 2, 'year_admitted' => 1984],
            //Araucanas
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 20, 'breed_id' => 6, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 23, 'breed_id' => 6, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 58, 'breed_id' => 6, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 108, 'breed_id' => 6, 'year_admitted' => 1976],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 131, 'breed_id' => 6, 'year_admitted' => 1976],
            //Buckeyes
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => NULL, 'breed_id' => 14, 'year_admitted' => 1960],
            //Chanteclers
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 83, 'breed_id' => 24, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 131, 'breed_id' => 24, 'year_admitted' => 1960],
            //Cornish
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 51, 'breed_id' => 27, 'year_admitted' => 1933],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 131, 'breed_id' => 27, 'year_admitted' => 1942],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 133, 'breed_id' => 27, 'year_admitted' => 1942],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 42, 'breed_id' => 27, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 135, 'breed_id' => 27, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 127, 'breed_id' => 27, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 32, 'breed_id' => 27, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 20, 'breed_id' => 27, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 69, 'breed_id' => 27, 'year_admitted' => 1996],
            //Crevecoeurs
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => NULL, 'breed_id' => 29, 'year_admitted' => 1960],
            //Cubalayas
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 20, 'breed_id' => 30, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 23, 'breed_id' => 30, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 131, 'breed_id' => 30, 'year_admitted' => 1960],
            //Houdans
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 69, 'breed_id' => 45, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 131, 'breed_id' => 45, 'year_admitted' => 1960],
            //La Fleche
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 20, 'breed_id' => 46, 'year_admitted' => 1960],
            //Maylays
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 23, 'breed_id' => 52, 'year_admitted' => 1904],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 20, 'breed_id' => 52, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 90, 'breed_id' => 52, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 131, 'breed_id' => 52, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 127, 'breed_id' => 52, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 130, 'breed_id' => 52, 'year_admitted' => 1981],
            //Polish
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 80, 'breed_id' => 64, 'year_admitted' => 1883],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 17, 'breed_id' => 64, 'year_admitted' => 1894],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 6, 'breed_id' => 64, 'year_admitted' => 1898],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 75, 'breed_id' => 64, 'year_admitted' => 1904],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 8, 'breed_id' => 64, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 15, 'breed_id' => 64, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 77, 'breed_id' => 64, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 79, 'breed_id' => 64, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 81, 'breed_id' => 64, 'year_admitted' => 1938],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 82, 'breed_id' => 64, 'year_admitted' => 1965],
            //Shamos
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 130, 'breed_id' => 74, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 20, 'breed_id' => 74, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 23, 'breed_id' => 74, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 51, 'breed_id' => 74, 'year_admitted' => 1981],
            //Sicilian Buttercups
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => NULL, 'breed_id' => 75, 'year_admitted' => 1960],
            //Sumatras
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 20, 'breed_id' => 78, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 26, 'breed_id' => 78, 'year_admitted' => 1996],
            //Yokohamas
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 131, 'breed_id' => 86, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 14, 'variety_id' => 91, 'breed_id' => 86, 'year_admitted' => 1981],

            // FEATHER LEGGED BANTAMS
            //Booted
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 131, 'breed_id' => 17, 'year_admitted' => 1879],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 68, 'breed_id' => 17, 'year_admitted' => 1914],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 87, 'breed_id' => 17, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 20, 'breed_id' => 17, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 104, 'breed_id' => 17, 'year_admitted' => 1996],
            //Belgian Bearded d'Uccle
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 10, 'breed_id' => 12, 'year_admitted' => 1914],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 13, 'breed_id' => 12, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 17, 'breed_id' => 12, 'year_admitted' => 1981],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 3, 'breed_id' => 12, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 9, 'breed_id' => 12, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 11, 'breed_id' => 12, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 14, 'breed_id' => 12, 'year_admitted' => 1996],
            //Brahmas
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 42, 'breed_id' => 13, 'year_admitted' => 1946],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 51, 'breed_id' => 13, 'year_admitted' => 1895],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 66, 'breed_id' => 13, 'year_admitted' => 1898],
            //Cochins
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 20, 'breed_id' => 26, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 42, 'breed_id' => 26, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 83, 'breed_id' => 26, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 131, 'breed_id' => 26, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 2, 'breed_id' => 26, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 41, 'breed_id' => 26, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 60, 'breed_id' => 26, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 69, 'breed_id' => 26, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 110, 'breed_id' => 26, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 89, 'breed_id' => 26, 'year_admitted' => 1977],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 19, 'breed_id' => 26, 'year_admitted' => 1977],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 26, 'breed_id' => 26, 'year_admitted' => 1977],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 46, 'breed_id' => 26, 'year_admitted' => 1977],
            //Faverolles
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 103, 'breed_id' => 38, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 131, 'breed_id' => 38, 'year_admitted' => 1981],
            //Langshans
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 20, 'breed_id' => 49, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 131, 'breed_id' => 49, 'year_admitted' => 1960],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 26, 'breed_id' => 49, 'year_admitted' => 1987],
            //Silkies
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 17, 'breed_id' => 76, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 80, 'breed_id' => 76, 'year_admitted' => 1874],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 3, 'breed_id' => 76, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 71, 'breed_id' => 76, 'year_admitted' => 1965],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 4, 'breed_id' => 76, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 5, 'breed_id' => 76, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 7, 'breed_id' => 76, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 12, 'breed_id' => 76, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 73, 'breed_id' => 76, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 74, 'breed_id' => 76, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 76, 'breed_id' => 76, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 78, 'breed_id' => 76, 'year_admitted' => 1996],
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => 16, 'breed_id' => 76, 'year_admitted' => 2000],
            //Sultans
            ['poultry_type_id' => 1, 'classification_id' => 15, 'variety_id' => NULL, 'breed_id' => 77, 'year_admitted' => 1960],

            //DUCKS
            //*Heavy Weight Class*
            //Pekin
            ['poultry_type_id' => 2, 'classification_id' => 16, 'variety_id' => 131, 'breed_id' => 61, 'year_admitted' => 1874],
            //Aylesbury
            ['poultry_type_id' => 2, 'classification_id' => 16, 'variety_id' => 131, 'breed_id' => 9, 'year_admitted' => 1874],
            //Rouen
            ['poultry_type_id' => 2, 'classification_id' => 16, 'variety_id' => NULL, 'breed_id' => 69, 'year_admitted' => 1874],
            //Muscovy
            ['poultry_type_id' => 2, 'classification_id' => 16, 'variety_id' => 131, 'breed_id' => 56, 'year_admitted' => 1874],
            ['poultry_type_id' => 2, 'classification_id' => 16, 'variety_id' => 20, 'breed_id' => 56, 'year_admitted' => 1904],
            ['poultry_type_id' => 2, 'classification_id' => 16, 'variety_id' => 26, 'breed_id' => 56, 'year_admitted' => 1950],
            ['poultry_type_id' => 2, 'classification_id' => 16, 'variety_id' => 44, 'breed_id' => 56, 'year_admitted' => 1982],
            //Saxony
            ['poultry_type_id' => 2, 'classification_id' => 16, 'variety_id' => NULL, 'breed_id' => 71, 'year_admitted' => 2000],
            //Silver Appleyard
            ['poultry_type_id' => 2, 'classification_id' => 16, 'variety_id' => 106, 'breed_id' => 5, 'year_admitted' => 1998],

            //*Medium Weight Class*
            //Cayuga
            ['poultry_type_id' => 2, 'classification_id' => 17, 'variety_id' => 20, 'breed_id' => 23, 'year_admitted' => 1874],
            //Crested
            ['poultry_type_id' => 2, 'classification_id' => 17, 'variety_id' => 131, 'breed_id' => 28, 'year_admitted' => 1874],
            ['poultry_type_id' => 2, 'classification_id' => 17, 'variety_id' => 20, 'breed_id' => 28, 'year_admitted' => 1977],
            //Swedish
            ['poultry_type_id' => 2, 'classification_id' => 17, 'variety_id' => 26, 'breed_id' => 80, 'year_admitted' => 1904],
            //Buff
            ['poultry_type_id' => 2, 'classification_id' => 17, 'variety_id' => 42, 'breed_id' => 15, 'year_admitted' => 1914],

            //*Light Weight Class*
            //Runner
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 54, 'breed_id' => 89, 'year_admitted' => 1898],
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 131, 'breed_id' => 89, 'year_admitted' => 1914],
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 86, 'breed_id' => 89, 'year_admitted' => 1914],
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 20, 'breed_id' => 89, 'year_admitted' => 1977],
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 42, 'breed_id' => 89, 'year_admitted' => 1977],
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 44, 'breed_id' => 89, 'year_admitted' => 1977],
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 50, 'breed_id' => 89, 'year_admitted' => 1977],
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 62, 'breed_id' => 89, 'year_admitted' => 1977],
            //Campbell
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 63, 'breed_id' => 19, 'year_admitted' => 1941],
            //Magpie
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 22, 'breed_id' => 51, 'year_admitted' => 1977],
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => 27, 'breed_id' => 51, 'year_admitted' => 1977],
            //Welsh Harlequin
            ['poultry_type_id' => 2, 'classification_id' => 18, 'variety_id' => NULL, 'breed_id' => 82, 'year_admitted' => 2001],

            //*Bantam Class*
            //Call
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 62, 'breed_id' => 18, 'year_admitted' => 1874],
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 131, 'breed_id' => 18, 'year_admitted' => 1874],
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 26, 'breed_id' => 18, 'year_admitted' => 1977],
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 126, 'breed_id' => 18, 'year_admitted' => 1982],
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 42, 'breed_id' => 18, 'year_admitted' => 1996],
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 84, 'breed_id' => 18, 'year_admitted' => 1996],
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 37, 'breed_id' => 18, 'year_admitted' => 2004],
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 44, 'breed_id' => 18, 'year_admitted' => 2007],
            //East Indie
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 20, 'breed_id' => 35, 'year_admitted' => 1874],
            //Mallard
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 62, 'breed_id' => 53, 'year_admitted' => 1961],
            ['poultry_type_id' => 2, 'classification_id' => 19, 'variety_id' => 126, 'breed_id' => 53, 'year_admitted' => 1987],


            //GEESE
            //*Heavy Class*
            //Toulouse
            ['poultry_type_id' => 3, 'classification_id' => 16, 'variety_id' => 62, 'breed_id' => 81, 'year_admitted' => 1874],
            ['poultry_type_id' => 3, 'classification_id' => 16, 'variety_id' => 42, 'breed_id' => 81, 'year_admitted' => 1977],
            //Embden(Embden)
            ['poultry_type_id' => 3, 'classification_id' => 16, 'variety_id' => 131, 'breed_id' => 37, 'year_admitted' => 1874],
            //African
            ['poultry_type_id' => 3, 'classification_id' => 16, 'variety_id' => 40, 'breed_id' => 1, 'year_admitted' => 1874],
            ['poultry_type_id' => 3, 'classification_id' => 16, 'variety_id' => 131, 'breed_id' => 1, 'year_admitted' => 1987],

            //*Medium Class*
            //Sebastopol
            ['poultry_type_id' => 3, 'classification_id' => 17, 'variety_id' => 131, 'breed_id' => 72, 'year_admitted' => 1938],
            //Pilgrim
            ['poultry_type_id' => 3, 'classification_id' => 17, 'variety_id' => 105, 'breed_id' => 65, 'year_admitted' => 1939],
            //American Buff
            ['poultry_type_id' => 3, 'classification_id' => 17, 'variety_id' => 42, 'breed_id' => 90, 'year_admitted' => 1947],
            //Saddleback Pomeranian
            ['poultry_type_id' => 3, 'classification_id' => 17, 'variety_id' => 62, 'breed_id' => 90, 'year_admitted' => 1977],
            ['poultry_type_id' => 3, 'classification_id' => 17, 'variety_id' => 42, 'breed_id' => 90, 'year_admitted' => 1977],

            //*Light Class*
            //Chinese
            ['poultry_type_id' => 3, 'classification_id' => 18, 'variety_id' => 42, 'breed_id' => 25, 'year_admitted' => 1874],
            ['poultry_type_id' => 3, 'classification_id' => 18, 'variety_id' => 131, 'breed_id' => 25, 'year_admitted' => 1874],
            //Tufted Roman
            ['poultry_type_id' => 3, 'classification_id' => 18, 'variety_id' => 131, 'breed_id' => 92, 'year_admitted' => 1977],
            //Canada
            ['poultry_type_id' => 3, 'classification_id' => 18, 'variety_id' => 53, 'breed_id' => 21, 'year_admitted' => 1874],
            //Egyptian
            ['poultry_type_id' => 3, 'classification_id' => 18, 'variety_id' => 40, 'breed_id' => 36, 'year_admitted' => 1977],

            //TURKEYS
            ['poultry_type_id' => 4, 'classification_id' => 20, 'variety_id' => 39, 'breed_id' => 93, 'year_admitted' => 1874],
            ['poultry_type_id' => 4, 'classification_id' => 20, 'variety_id' => 70, 'breed_id' => 93, 'year_admitted' => 1874],
            ['poultry_type_id' => 4, 'classification_id' => 20, 'variety_id' => 132, 'breed_id' => 93, 'year_admitted' => 1874],
            ['poultry_type_id' => 4, 'classification_id' => 20, 'variety_id' => 20, 'breed_id' => 93, 'year_admitted' => 1874],
            ['poultry_type_id' => 4, 'classification_id' => 20, 'variety_id' => 125, 'breed_id' => 93, 'year_admitted' => 1874],
            ['poultry_type_id' => 4, 'classification_id' => 20, 'variety_id' => 36, 'breed_id' => 93, 'year_admitted' => 1909],
            ['poultry_type_id' => 4, 'classification_id' => 20, 'variety_id' => 18, 'breed_id' => 93, 'year_admitted' => 1951],
            ['poultry_type_id' => 4, 'classification_id' => 20, 'variety_id' => 101, 'breed_id' => 93, 'year_admitted' => 1874],

            //GUINEAS
            ['poultry_type_id' => 5, 'classification_id' => 18, 'variety_id' => 85, 'breed_id' => 94, 'year_admitted' => NULL],
            ['poultry_type_id' => 5, 'classification_id' => 18, 'variety_id' => 64, 'breed_id' => 94, 'year_admitted' => NULL],
            ['poultry_type_id' => 5, 'classification_id' => 18, 'variety_id' => 131, 'breed_id' => 94, 'year_admitted' => NULL],

         ]);            
    }
}

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
         	['poultry_type_id' => 1, 'variety_id' => 2, 'breed_id' => 62],
         	['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 62],
         	['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 62],
         	['poultry_type_id' => 1, 'variety_id' => 112, 'breed_id' => 62],
         	['poultry_type_id' => 1, 'variety_id' => 84, 'breed_id' => 62],
         	['poultry_type_id' => 1, 'variety_id' => 46, 'breed_id' => 62],
         	['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 62],
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 62],
            ['poultry_type_id' => 1, 'variety_id' => 47, 'breed_id' => 62],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 62],
         	//Dominiques
         	['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 32],
         	//Wyandottes
         	['poultry_type_id' => 1, 'variety_id' => 111, 'breed_id' => 85],
         	['poultry_type_id' => 1, 'variety_id' => 61, 'breed_id' => 85],
         	['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 85],
         	['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 85],
         	['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 85],
         	['poultry_type_id' => 1, 'variety_id' => 84, 'breed_id' => 85],
         	['poultry_type_id' => 1, 'variety_id' => 112, 'breed_id' => 85],
         	['poultry_type_id' => 1, 'variety_id' => 47, 'breed_id' => 85],
         	['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 85],
            ['poultry_type_id' => 1, 'variety_id' => 44, 'breed_id' => 85],
         	//Javas
         	['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 41],
         	['poultry_type_id' => 1, 'variety_id' => 70, 'breed_id' => 41],
         	//Rhode Island Reds
         	['poultry_type_id' => 1, 'variety_id' => 112, 'breed_id' => 66],
         	['poultry_type_id' => 1, 'variety_id' => 93, 'breed_id' => 66],
            ['poultry_type_id' => 1, 'variety_id' => 114, 'breed_id' => 67],
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 67],
         	//Rhode Island Whites
         	['poultry_type_id' => 1, 'variety_id' => 93, 'breed_id' => 68],
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 68],
         	//Buckeyes
         	['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 14],
         	//Chanteclers
         	['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 24],
         	['poultry_type_id' => 1, 'variety_id' => 84, 'breed_id' => 24],
         	//Jersey Giants
         	['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 42],
         	['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 42],
         	['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 42],
         	//Lamonas
         	['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 48],
            //New Hampshires
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 58],
            ['poultry_type_id' => 1, 'variety_id' => 114, 'breed_id' => 58],
            //Hollands
            ['poultry_type_id' => 1, 'variety_id' => 2, 'breed_id' => 44],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 44],
            //Delawares
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 31],

            //LARGE ASIATIC CHICKENS
            //Brahmas
            ['poultry_type_id' => 1, 'variety_id' => 67, 'breed_id' => 13],
            ['poultry_type_id' => 1, 'variety_id' => 52, 'breed_id' => 13],
            ['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 13],
            //Cochins
            ['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 84, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 111, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 61, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 41, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 2, 'breed_id' => 26],
            //Bantam Cochins
            ['poultry_type_id' => 1, 'variety_id' => 42, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 70, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 90, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 19, 'breed_id' => 26],
            ['poultry_type_id' => 1, 'variety_id' => 47, 'breed_id' => 26],
            //Lanshans
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 49],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 49],
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 49],

            //LARGE ENGLISH CHICKENS
            //Dorkings
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 33],
            ['poultry_type_id' => 1, 'variety_id' => 110, 'breed_id' => 33],
            ['poultry_type_id' => 1, 'variety_id' => 46, 'breed_id' => 33],
            ['poultry_type_id' => 1, 'variety_id' => 90, 'breed_id' => 33],
            ['poultry_type_id' => 1, 'variety_id' => 50, 'breed_id' => 33],
            ['poultry_type_id' => 1, 'variety_id' => 101, 'breed_id' => 33],
            //Redcaps
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 66],
            //Cornish
            ['poultry_type_id' => 1, 'variety_id' => 52, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 134, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 133, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 44, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 136, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 128, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 33, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 27],
            ['poultry_type_id' => 1, 'variety_id' => 70, 'breed_id' => 27],
            //Orpingtons
            ['poultry_type_id' => 1, 'variety_id' => 52, 'breed_id' => 59],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 59],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 59],
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 59],
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 59],
            ['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 59],
            //Sussex
            ['poultry_type_id' => 1, 'variety_id' => 129, 'breed_id' => 79],
            ['poultry_type_id' => 1, 'variety_id' => 90, 'breed_id' => 79],
            ['poultry_type_id' => 1, 'variety_id' => 67, 'breed_id' => 79],
            //Australorps
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 8],

            // LARGE MEDITERRANEAN CHICKENS
            //Leghorns
            ['poultry_type_id' => 1, 'variety_id' => 115, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 120, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 122, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 125, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 97, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 99, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 101, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 117, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 124, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 123, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 116, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 118, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 94, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 95, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 100, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 121, 'breed_id' => 50],
            //Leghorns
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 25, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 47, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 53, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 68, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 90, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 107, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 59, 'breed_id' => 50],
            ['poultry_type_id' => 1, 'variety_id' => 2, 'breed_id' => 50],
            //Minorcas
            ['poultry_type_id' => 1, 'variety_id' => 115, 'breed_id' => 54],
            ['poultry_type_id' => 1, 'variety_id' => 94, 'breed_id' => 54],
            ['poultry_type_id' => 1, 'variety_id' => 125, 'breed_id' => 54],
            ['poultry_type_id' => 1, 'variety_id' => 101, 'breed_id' => 54],
            ['poultry_type_id' => 1, 'variety_id' => 117, 'breed_id' => 54],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 54],
            ['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 54],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 54],
           
            //White Faced Black Spanish
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 84],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 84],
            //Andalusians
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 3],
            //Anconas
            ['poultry_type_id' => 1, 'variety_id' => 114, 'breed_id' => 4],
            ['poultry_type_id' => 1, 'variety_id' => 93, 'breed_id' => 4],
            ['poultry_type_id' => 1, 'variety_id' => 70, 'breed_id' => 4],
            //Sicilian Buttercups
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 75],
            //Catalanas
            ['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 22],

            //LARGE CONTINENTAL CHICKENS
            //*Northern European*
            //Barnevelders
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 10],
            //Campines
            ['poultry_type_id' => 1, 'variety_id' => 107, 'breed_id' => 20],
            ['poultry_type_id' => 1, 'variety_id' => 58, 'breed_id' => 20],
            //Hamburgs
            ['poultry_type_id' => 1, 'variety_id' => 62, 'breed_id' => 43],
            ['poultry_type_id' => 1, 'variety_id' => 113, 'breed_id' => 43],
            ['poultry_type_id' => 1, 'variety_id' => 60, 'breed_id' => 43],
            ['poultry_type_id' => 1, 'variety_id' => 112, 'breed_id' => 43],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 43],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 43],
            //Lakenvelders
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 47],
            //Welsummers
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 83],
            //*Polish*
            //Polish
            ['poultry_type_id' => 1, 'variety_id' => 82, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 78, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 80, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 81, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 8, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 15, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 17, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 6, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 76, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 83, 'breed_id' => 64],
            ['poultry_type_id' => 1, 'variety_id' => 73, 'breed_id' => 64],
            //*French*
            //Houdans
            ['poultry_type_id' => 1, 'variety_id' => 70, 'breed_id' => 45],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 45],
            //Crevecoeurs
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 29],
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 29],
            //La Fleche
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 46],
            //Favorelles
            ['poultry_type_id' => 1, 'variety_id' => 104, 'breed_id' => 38],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 38],

            //ALL OTHER STANDARD BREEDS
            //*Games*
            //Modern Games
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 42, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 59, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 109, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 19, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 91, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 131, 'breed_id' => 55],
            //Modern Game bantams
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 30, 'breed_id' => 55],
            ['poultry_type_id' => 1, 'variety_id' => 66, 'breed_id' => 55],
            //Old English Games
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 42, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 59, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 109, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 91, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 128, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 30, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 66, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 32, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 35, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 105, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 49, 'breed_id' => 60],
            //Old English Game bantams
            ['poultry_type_id' => 1, 'variety_id' => 131, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 19, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 50, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 57, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 89, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 39, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 29, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 47, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 108, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 56, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 69, 'breed_id' => 60],
            ['poultry_type_id' => 1, 'variety_id' => 24, 'breed_id' => 60],

            //*Orientals*
            //Sumatras
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 78],
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 78],
            //Malays
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 52],
            ['poultry_type_id' => 1, 'variety_id' => 128, 'breed_id' => 52],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 52],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 52],
            ['poultry_type_id' => 1, 'variety_id' => 91, 'breed_id' => 52],
            ['poultry_type_id' => 1, 'variety_id' => 131, 'breed_id' => 52],
            //Cubalayas
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 30],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 30],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 30],
            //Phoenix
            ['poultry_type_id' => 1, 'variety_id' => 113, 'breed_id' => 63],
            ['poultry_type_id' => 1, 'variety_id' => 58, 'breed_id' => 63],
            ['poultry_type_id' => 1, 'variety_id' => 107, 'breed_id' => 59],
            ['poultry_type_id' => 1, 'variety_id' => 58, 'breed_id' => 59],
            //Yokohamas
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 86],
            ['poultry_type_id' => 1, 'variety_id' => 92, 'breed_id' => 30],
            ['poultry_type_id' => 1, 'variety_id' => 92, 'breed_id' => 86],

            //Aseels
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 7],
            ['poultry_type_id' => 1, 'variety_id' => 52, 'breed_id' => 7],
            ['poultry_type_id' => 1, 'variety_id' => 128, 'breed_id' => 7],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 7],
            ['poultry_type_id' => 1, 'variety_id' => 131, 'breed_id' => 7],
            //Shamos
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 74],
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 74],
            ['poultry_type_id' => 1, 'variety_id' => 52, 'breed_id' => 74],
            ['poultry_type_id' => 1, 'variety_id' => 131, 'breed_id' => 74],

            //*Miscellaneous*
            //Sultans
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 77],
            ['poultry_type_id' => 1, 'variety_id' => NULL, 'breed_id' => 77],
            //Naked Necks
            ['poultry_type_id' => 1, 'variety_id' => 90, 'breed_id' => 57],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 57],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 57],
            ['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 57],
            //Araucanas
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 6],
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 6],
            ['poultry_type_id' => 1, 'variety_id' => 59, 'breed_id' => 6],
            ['poultry_type_id' => 1, 'variety_id' => 109, 'breed_id' => 6],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 6],
            //Ameraucanas
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 2],
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 2],
            ['poultry_type_id' => 1, 'variety_id' => 36, 'breed_id' => 2],
            ['poultry_type_id' => 1, 'variety_id' => 42, 'breed_id' => 2],
            ['poultry_type_id' => 1, 'variety_id' => 43, 'breed_id' => 2],
            ['poultry_type_id' => 1, 'variety_id' => 107, 'breed_id' => 2],
            ['poultry_type_id' => 1, 'variety_id' => 131, 'breed_id' => 2],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 2],

            //GAME BANTAMS


            //American Games
            ['poultry_type_id' => 1, 'variety_id' => 19, 'breed_id' => 87],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 87],
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 87],
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 87],
            ['poultry_type_id' => 1, 'variety_id' => 30, 'breed_id' => 87],
            ['poultry_type_id' => 1, 'variety_id' => 42, 'breed_id' => 87],
            ['poultry_type_id' => 1, 'variety_id' => 59, 'breed_id' => 87],
            ['poultry_type_id' => 1, 'variety_id' => 91, 'breed_id' => 87],
            ['poultry_type_id' => 1, 'variety_id' => 107, 'breed_id' => 87],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 87],

            //SINGLE COMB, CLEAN LEGGED, OTHER THAN GAME BANTAMS
            //Dutch
            ['poultry_type_id' => 1, 'variety_id' => 68, 'breed_id' => 34],
            ['poultry_type_id' => 1, 'variety_id' => 107, 'breed_id' => 34],
            ['poultry_type_id' => 1, 'variety_id' => 31, 'breed_id' => 34],
            ['poultry_type_id' => 1, 'variety_id' => 32, 'breed_id' => 34],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 34],
            ['poultry_type_id' => 1, 'variety_id' => 48, 'breed_id' => 34],
            //Japanese
            ['poultry_type_id' => 1, 'variety_id' => 135, 'breed_id' => 40],
            ['poultry_type_id' => 1, 'variety_id' => 63, 'breed_id' => 40],
            ['poultry_type_id' => 1, 'variety_id' => 70, 'breed_id' => 40],
            ['poultry_type_id' => 1, 'variety_id' => 24, 'breed_id' => 40],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 40],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 40],
            ['poultry_type_id' => 1, 'variety_id' => 2, 'breed_id' => 40],
            ['poultry_type_id' => 1, 'variety_id' => 42, 'breed_id' => 40],
            ['poultry_type_id' => 1, 'variety_id' => 131, 'breed_id' => 40],


            //ROSE COMB CLEAN LEGGED BANTAMS
            //Belgian Bearded d'Anvers
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 11],
            ['poultry_type_id' => 1, 'variety_id' => 23, 'breed_id' => 11],
            ['poultry_type_id' => 1, 'variety_id' => 50, 'breed_id' => 11],
            ['poultry_type_id' => 1, 'variety_id' => 69, 'breed_id' => 11],
            ['poultry_type_id' => 1, 'variety_id' => 70, 'breed_id' => 11],
            ['poultry_type_id' => 1, 'variety_id' => 88, 'breed_id' => 11],
            ['poultry_type_id' => 1, 'variety_id' => 89, 'breed_id' => 11],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 11],
            ['poultry_type_id' => 1, 'variety_id' => 105, 'breed_id' => 11],

            //Rosecombs
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 88],
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 88],
            ['poultry_type_id' => 1, 'variety_id' => 27, 'breed_id' => 88],
            //Sebrights
            ['poultry_type_id' => 1, 'variety_id' => 58, 'breed_id' => 73],
            ['poultry_type_id' => 1, 'variety_id' => 107, 'breed_id' => 73],

            // FEATHER LEGGED BANTAMS
            //Booted
            ['poultry_type_id' => 1, 'variety_id' => 132, 'breed_id' => 17],
            ['poultry_type_id' => 1, 'variety_id' => 69, 'breed_id' => 17],
            ['poultry_type_id' => 1, 'variety_id' => 88, 'breed_id' => 17],
            ['poultry_type_id' => 1, 'variety_id' => 20, 'breed_id' => 17],
            ['poultry_type_id' => 1, 'variety_id' => 105, 'breed_id' => 17],
            //Belgian Bearded d'Uccle
            ['poultry_type_id' => 1, 'variety_id' => 10, 'breed_id' => 12],
            ['poultry_type_id' => 1, 'variety_id' => 13, 'breed_id' => 12],
            ['poultry_type_id' => 1, 'variety_id' => 17, 'breed_id' => 12],
            ['poultry_type_id' => 1, 'variety_id' => 3, 'breed_id' => 12],
            ['poultry_type_id' => 1, 'variety_id' => 9, 'breed_id' => 12],
            ['poultry_type_id' => 1, 'variety_id' => 11, 'breed_id' => 12],
            ['poultry_type_id' => 1, 'variety_id' => 14, 'breed_id' => 12],

            //Silkies
            ['poultry_type_id' => 1, 'variety_id' => 17, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 81, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 3, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 72, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 4, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 5, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 7, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 12, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 74, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 75, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 77, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 79, 'breed_id' => 76],
            ['poultry_type_id' => 1, 'variety_id' => 16, 'breed_id' => 76],


            //DUCKS
            //*Heavy Weight Class*
            //Pekin
            ['poultry_type_id' => 2, 'variety_id' => 132, 'breed_id' => 61],
            //Aylesbury
            ['poultry_type_id' => 2, 'variety_id' => 132, 'breed_id' => 9],
            //Rouen
            ['poultry_type_id' => 2, 'variety_id' => NULL, 'breed_id' => 69],
            //Muscovy
            ['poultry_type_id' => 2, 'variety_id' => 132, 'breed_id' => 56],
            ['poultry_type_id' => 2, 'variety_id' => 20, 'breed_id' => 56],
            ['poultry_type_id' => 2, 'variety_id' => 27, 'breed_id' => 56],
            ['poultry_type_id' => 2, 'variety_id' => 45, 'breed_id' => 56],
            //Saxony
            ['poultry_type_id' => 2, 'variety_id' => NULL, 'breed_id' => 71],
            //Silver Appleyard
            ['poultry_type_id' => 2, 'variety_id' => 107, 'breed_id' => 5],

            //*Medium Weight Class*
            //Cayuga
            ['poultry_type_id' => 2, 'variety_id' => 20, 'breed_id' => 23],
            //Crested
            ['poultry_type_id' => 2, 'variety_id' => 132, 'breed_id' => 28],
            ['poultry_type_id' => 2, 'variety_id' => 20, 'breed_id' => 28],
            //Swedish
            ['poultry_type_id' => 2, 'variety_id' => 27, 'breed_id' => 80],
            //Buff
            ['poultry_type_id' => 2, 'variety_id' => 43, 'breed_id' => 15],

            //*Light Weight Class*
            //Runner
            ['poultry_type_id' => 2, 'variety_id' => 55, 'breed_id' => 89],
            ['poultry_type_id' => 2, 'variety_id' => 132, 'breed_id' => 89],
            ['poultry_type_id' => 2, 'variety_id' => 87, 'breed_id' => 89],
            ['poultry_type_id' => 2, 'variety_id' => 20, 'breed_id' => 89],
            ['poultry_type_id' => 2, 'variety_id' => 43, 'breed_id' => 89],
            ['poultry_type_id' => 2, 'variety_id' => 45, 'breed_id' => 89],
            ['poultry_type_id' => 2, 'variety_id' => 51, 'breed_id' => 89],
            ['poultry_type_id' => 2, 'variety_id' => 63, 'breed_id' => 89],
            //Campbell
            ['poultry_type_id' => 2, 'variety_id' => 64, 'breed_id' => 19],
            //Magpie
            ['poultry_type_id' => 2, 'variety_id' => 22, 'breed_id' => 51],
            ['poultry_type_id' => 2, 'variety_id' => 28, 'breed_id' => 51],
            //Welsh Harlequin
            ['poultry_type_id' => 2, 'variety_id' => NULL, 'breed_id' => 82],

            //*Bantam Class*
            //Call
            ['poultry_type_id' => 2, 'variety_id' => 63, 'breed_id' => 18],
            ['poultry_type_id' => 2, 'variety_id' => 132, 'breed_id' => 18],
            ['poultry_type_id' => 2, 'variety_id' => 27, 'breed_id' => 18],
            ['poultry_type_id' => 2, 'variety_id' => 127, 'breed_id' => 18],
            ['poultry_type_id' => 2, 'variety_id' => 43, 'breed_id' => 18],
            ['poultry_type_id' => 2, 'variety_id' => 85, 'breed_id' => 18],
            ['poultry_type_id' => 2, 'variety_id' => 38, 'breed_id' => 18],
            ['poultry_type_id' => 2, 'variety_id' => 45, 'breed_id' => 18],
            //East Indie
            ['poultry_type_id' => 2, 'variety_id' => 20, 'breed_id' => 35],
            //Mallard
            ['poultry_type_id' => 2, 'variety_id' => 63, 'breed_id' => 53],
            ['poultry_type_id' => 2, 'variety_id' => 127, 'breed_id' => 53],


            //GEESE
            //*Heavy Class*
            //Toulouse
            ['poultry_type_id' => 3, 'variety_id' => 63, 'breed_id' => 81],
            ['poultry_type_id' => 3, 'variety_id' => 43, 'breed_id' => 81],
            //Embden(Embden)
            ['poultry_type_id' => 3, 'variety_id' => 132, 'breed_id' => 37],
            //African
            ['poultry_type_id' => 3, 'variety_id' => 41, 'breed_id' => 1],
            ['poultry_type_id' => 3, 'variety_id' => 132, 'breed_id' => 1],

            //*Medium Class*
            //Sebastopol
            ['poultry_type_id' => 3, 'variety_id' => 132, 'breed_id' => 72],
            //Pilgrim
            ['poultry_type_id' => 3, 'variety_id' => 106, 'breed_id' => 65],
            //American Buff
            ['poultry_type_id' => 3, 'variety_id' => 43, 'breed_id' => 90],
            //Saddleback Pomeranian
            ['poultry_type_id' => 3, 'variety_id' => 63, 'breed_id' => 91],
            ['poultry_type_id' => 3, 'variety_id' => 43, 'breed_id' => 91], 
            //*Light Class*
            //Chinese
            ['poultry_type_id' => 3, 'variety_id' => 43, 'breed_id' => 25],
            ['poultry_type_id' => 3, 'variety_id' => 132, 'breed_id' => 25],
            //Tufted Roman
            ['poultry_type_id' => 3, 'variety_id' => 132, 'breed_id' => 92],
            //Canada
            ['poultry_type_id' => 3, 'variety_id' => 54, 'breed_id' => 21],
            //Egyptian
            ['poultry_type_id' => 3, 'variety_id' => 41, 'breed_id' => 36],

            //TURKEYS
            ['poultry_type_id' => 4, 'variety_id' => 40, 'breed_id' => 93],
            ['poultry_type_id' => 4, 'variety_id' => 71, 'breed_id' => 93],
            ['poultry_type_id' => 4, 'variety_id' => 133, 'breed_id' => 93],
            ['poultry_type_id' => 4, 'variety_id' => 20, 'breed_id' => 93],
            ['poultry_type_id' => 4, 'variety_id' => 126, 'breed_id' => 93],
            ['poultry_type_id' => 4, 'variety_id' => 37, 'breed_id' => 93],
            ['poultry_type_id' => 4, 'variety_id' => 18, 'breed_id' => 93],
            ['poultry_type_id' => 4, 'variety_id' => 102, 'breed_id' => 93],

            //GUINEAS
            ['poultry_type_id' => 5, 'variety_id' => 86, 'breed_id' => 94],
            ['poultry_type_id' => 5, 'variety_id' => 65, 'breed_id' => 94],
            ['poultry_type_id' => 5, 'variety_id' => 132, 'breed_id' => 94],

         ]);            
    }
}

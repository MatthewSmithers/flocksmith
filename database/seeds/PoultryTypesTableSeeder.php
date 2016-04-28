<?php

use Illuminate\Database\Seeder;

class PoultryTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('poultry_types')->insert([
            'poultry_type' => 'Chicken',
            'poultry_type' => 'Duck',
            'poultry_type' => 'Turkey',
            'poultry_type' => 'Game',
            'poultry_type' => 'Guinea',
            'poultry_type' => 'Geese',
        ]);
    }
}

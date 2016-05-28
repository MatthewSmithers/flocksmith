<?php namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PoultryTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete poultry types table records
         DB::table('poultry_types')->delete();

         //insert some dummy records
         DB::table('poultry_types')->insert([
            ['poultry_type' => 'Chicken'],
            ['poultry_type' => 'Duck'],
            ['poultry_type' => 'Goose'],
            ['poultry_type' => 'Turkey'],
            ['poultry_type' => 'Guinea'],
            ['poultry_type' => 'Game']    
        ]);
    }
}

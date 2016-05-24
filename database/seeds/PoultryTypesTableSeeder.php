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
         DB::table('poultry_types')->insert(array(
            array('poultry_type' => 'Chicken'),
            array('poultry_type' => 'Duck'),
            array('poultry_type' => 'Goose'),
            array('poultry_type' => 'Turkey'),
            array('poultry_type' => 'Guinea'),
            array('poultry_type' => 'Game'),
            
        ));
    }
}

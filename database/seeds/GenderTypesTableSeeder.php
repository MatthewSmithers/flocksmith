<?php namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GenderTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //delete gender types table records
         DB::table('gender_types')->delete();

         //insert some gender type records
         DB::table('gender_types')->insert([
            ['gender_type' => 'unknown'],
            ['gender_type' => 'male'],
            ['gender_type' => 'female']
        ]);
    }
}

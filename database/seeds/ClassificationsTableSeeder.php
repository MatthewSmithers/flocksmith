<?php  namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//delete classifications table records
         DB::table('poultry_types')->delete();

         //insert some classification records
         DB::table('poultry_types')->insert(array(
            array('poultry_type' => 'American'),
            array('poultry_type' => 'Engish'),
            array('poultry_type' => 'Mediterranean'),
            array('poultry_type' => 'Asiatic'),
            array('poultry_type' => 'Continental'),
            array('poultry_type' => 'All Other')
        ));
    }
}

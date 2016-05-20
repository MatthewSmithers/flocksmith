<?php namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnatomyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete anatomy table records
        DB::table('anatomy')->delete();

        //insert some anatomical records
         DB::table('anatomy')->insert(array(
        	array('nomenclature' => 'Abdomen'),
			array('nomenclature' => 'Back'),
			array('nomenclature' => 'Beak'),
			array('nomenclature' => 'Breast'),
			array('nomenclature' => 'Cape'),
			array('nomenclature' => 'Comb'),
			array('nomenclature' => 'Cushion'),
			array('nomenclature' => 'Ear'),
			array('nomenclature' => 'Ear-lobe'),
			array('nomenclature' => 'Eye'),
			array('nomenclature' => 'Face'),
			array('nomenclature' => 'Fluff'),
			array('nomenclature' => 'Front of Neck Plumage'),
			array('nomenclature' => 'Hackle'),
			array('nomenclature' => 'Hock Plumage'),
			array('nomenclature' => 'Primaries'),
			array('nomenclature' => 'Primary Coverts'),
			array('nomenclature' => 'Lesser Sickles'),
			array('nomenclature' => 'Lower Mandible'),
			array('nomenclature' => 'Lower Saddle'),
			array('nomenclature' => 'Lower Thigh Feathers'),
			array('nomenclature' => 'Lower Thigh Plumage'),
			array('nomenclature' => 'Mail Tail'),
			array('nomenclature' => 'Main Sickles'),
			array('nomenclature' => 'Nostril'),
			array('nomenclature' => 'Rear Body Feathers'),
			array('nomenclature' => 'Upper Mandible'),
			array('nomenclature' => 'Upper Saddle'),
			array('nomenclature' => 'Secondaries of Wing Bay'),
			array('nomenclature' => 'Shoulder'),
			array('nomenclature' => 'Skull'),
			array('nomenclature' => 'Stern'),
			array('nomenclature' => 'Sweep of Back'),
			array('nomenclature' => 'Tail Coverts'),
			array('nomenclature' => 'Throat'),
			array('nomenclature' => 'Wattle'),
			array('nomenclature' => 'Wing Bars'),
			array('nomenclature' => 'Wing Bow'),
			array('nomenclature' => 'Wing Coverts'),
			array('nomenclature' => 'Wing Front')
         	));
    }
}

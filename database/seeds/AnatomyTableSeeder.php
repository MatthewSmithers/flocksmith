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
         DB::table('anatomy')->insert([
        	['nomenclature' => 'Abdomen'],
			['nomenclature' => 'Back'],
			['nomenclature' => 'Beak'],
			['nomenclature' => 'Breast'],
			['nomenclature' => 'Cape'],
			['nomenclature' => 'Comb'],
			['nomenclature' => 'Cushion'],
			['nomenclature' => 'Ear'],
			['nomenclature' => 'Ear-lobe'],
			['nomenclature' => 'Eye'],
			['nomenclature' => 'Face'],
			['nomenclature' => 'Fluff'],
			['nomenclature' => 'Front of Neck Plumage'],
			['nomenclature' => 'Hackle'],
			['nomenclature' => 'Hock Plumage'],
			['nomenclature' => 'Primaries'],
			['nomenclature' => 'Primary Coverts'],
			['nomenclature' => 'Lesser Sickles'],
			['nomenclature' => 'Lower Mandible'],
			['nomenclature' => 'Lower Saddle'],
			['nomenclature' => 'Lower Thigh Feathers'],
			['nomenclature' => 'Lower Thigh Plumage'],
			['nomenclature' => 'Mail Tail'],
			['nomenclature' => 'Main Sickles'],
			['nomenclature' => 'Nostril'],
			['nomenclature' => 'Rear Body Feathers'],
			['nomenclature' => 'Upper Mandible'],
			['nomenclature' => 'Upper Saddle'],
			['nomenclature' => 'Secondaries of Wing Bay'],
			['nomenclature' => 'Shoulder'],
			['nomenclature' => 'Skull'],
			['nomenclature' => 'Stern'],
			['nomenclature' => 'Sweep of Back'],
			['nomenclature' => 'Tail Coverts'],
			['nomenclature' => 'Throat'],
			['nomenclature' => 'Wattle'],
			['nomenclature' => 'Wing Bars'],
			['nomenclature' => 'Wing Bow'],
			['nomenclature' => 'Wing Coverts'],
			['nomenclature' => 'Wing Front']
         	]);
    }
}

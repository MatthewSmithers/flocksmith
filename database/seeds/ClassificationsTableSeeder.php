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
         DB::table('classifications')->delete();

         //insert some classification records
         DB::table('classifications')->insert(array(
            array('classification' => 'American'),  // 1
            array('classification' => 'Asiatic'),    // 2
            array('classification' => 'English'), // 3
            array('classification' => 'Mediterranean'),   // 4
            array('classification' => 'Continental-Northern European'), // 5
            array('classification' => 'Continental-Polish'),    // 6
            array('classification' => 'Continental-French'),    // 7
            array('classification' => 'All Other Breeds-Games'),    // 8    
            array('classification' => 'All Other Breeds-Orientals'),    // 9
            array('classification' => 'All Other Breeds-Miscellaneous'),    // 10
            array('classification' => 'Game Bantams'),  // 11
            array('classification' => 'Single Comb Clean Legged Other Than Game Bantams'),  // 12
            array('classification' => 'Rose Comb Clean Legged Bantams'),    // 13
            array('classification' => 'All Other Combs Clean Legged Bantams'),  // 14
            array('classification' => 'Feather Legged Bantams'),    // 15
            array('classification' => 'Heavy Class'),   // 16
            array('classification' => 'Medium Class'),  // 17
            array('classification' => 'Light Class'),   // 18
            array('classification' => 'Bantam Class'),  // 19
            array('classification' => 'Turkey Class'),  // 20
        ));
    }
}

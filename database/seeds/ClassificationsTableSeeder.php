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
         DB::table('classifications')->insert([

            ['classification' => 'American'],  // 1
            ['classification' => 'Asiatic'],    // 2
            ['classification' => 'English'], // 3
            ['classification' => 'Mediterranean'],   // 4
            ['classification' => 'Continental-Northern European'], // 5
            ['classification' => 'Continental-Polish'],    // 6
            ['classification' => 'Continental-French'],    // 7
            ['classification' => 'All Other Breeds-Games'],    // 8    
            ['classification' => 'All Other Breeds-Orientals'],    // 9
            ['classification' => 'All Other Breeds-Miscellaneous'],    // 10
            ['classification' => 'Game Bantams'],  // 11
            ['classification' => 'Single Comb Clean Legged Other Than Game Bantams'],  // 12
            ['classification' => 'Rose Comb Clean Legged Bantams'],    // 13
            ['classification' => 'All Other Combs Clean Legged Bantams'],  // 14
            ['classification' => 'Feather Legged Bantams'],    // 15
            ['classification' => 'Heavy Class'],   // 16
            ['classification' => 'Medium Class'],  // 17
            ['classification' => 'Light Class'],   // 18
            ['classification' => 'Bantam Class'],  // 19
            ['classification' => 'Turkey Class']  // 20
            
            ]);
    }
}

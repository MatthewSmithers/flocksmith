<?php namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VarietiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//delete varieties table records
        DB::table('varieties')->delete();

        //insert the varieties
        DB::table('varieties')->insert([
		['variety' => 'American'],						// 1
		['variety' => 'Barred'],						// 2
		['variety' => 'Bearded Black'],					// 3
		['variety' => 'Bearded Blue'],					// 4
		['variety' => 'Bearded Buff'],					// 5
		['variety' => 'Bearded Buff Laced'],			// 6
		['variety' => 'Bearded Gray'],					// 7
		['variety' => 'Bearded Golden'],				// 8
		['variety' => 'Bearded Golden Neck'],			// 9
		['variety' => 'Bearded Mille Fleur'],			// 10
		['variety' => 'Bearded Mottled'],				// 11
		['variety' => 'Bearded Partridge'],				// 12
		['variety' => 'Bearded Porcelain'],				// 13
		['variety' => 'Bearded Self Blue'],				// 14
		['variety' => 'Bearded Silver'],				// 15
		['variety' => 'Bearded Splash'],				// 16
		['variety' => 'Bearded White'],					// 17
		['variety' => 'Beltsville Small White'],		// 18
		['variety' => 'Birchen'],						// 19
		['variety' => 'Black'],							// 20
		['variety' => 'Black Frizzle'],					// 21
		['variety' => 'Black & White'],					// 22
		['variety' => 'Black Breasted Red'],			// 23
		['variety' => 'Black Tailed Buff'],				// 24
		['variety' => 'Black Tailed Red'],				// 25
		['variety' => 'Black Tailed White'], 			// 26
		['variety' => 'Blue'],							// 27
		['variety' => 'Blue & White'],					// 28
		['variety' => 'Blue Brassy Back'],				// 29
		['variety' => 'Blue Breasted Red'],				// 30
		['variety' => 'Blue Cream Light Brown'],		// 31
		['variety' => 'Blue Golden Duckwing'],			// 32
		['variety' => 'Blue Laced Red'],				// 33
		['variety' => 'Blue Light Brown Dutch'],		// 34
		['variety' => 'Blue Silver Duckwing'],			// 35
		['variety' => 'Blue Wheaten'],					// 36
		['variety' => 'Bourbon Red'],					// 37
		['variety' => 'Butterscotch'],					// 38
		['variety' => 'Brassy Back'],					// 39
		['variety' => 'Bronze'],						// 40
		['variety' => 'Brown'],							// 41
		['variety' => 'Brown Red'],						// 42
		['variety' => 'Buff'],							// 43
		['variety' => 'Buff Columbian'],				// 44
		['variety' => 'Chocolate'],						// 45
		['variety' => 'Colored'],						// 46
		['variety' => 'Columbian'],						// 47
		['variety' => 'Cream Light Brown'],				// 48
		['variety' => 'Crele'],							// 49
		['variety' => 'Cuckoo'],						// 50
		['variety' => 'Cumberland Blue'],				// 51
		['variety' => 'Dark'],							// 52
		['variety' => 'Dark Brown'],					// 53
		['variety' => 'Eastern'],						// 54
		['variety' => 'Fawn & White'],					// 55
		['variety' => 'Fawn Silver Duckwing'],			// 56
		['variety' => 'Ginger Red'],					// 57
		['variety' => 'Golden'],						// 58
		['variety' => 'Golden Duckwing'],				// 59
		['variety' => 'Golden Penciled'],				// 60
		['variety' => 'Golden Laced'],					// 61
		['variety' => 'Golden Spangled'],				// 62
		['variety' => 'Gray'],							// 63
		['variety' => 'Khaki'],							// 64
		['variety' => 'Lavender'],						// 65
		['variety' => 'Lemon Blue'],					// 66
		['variety' => 'Light'],							// 67
		['variety' => 'Light Brown'],					// 68
		['variety' => 'Mille Fleur'],					// 69
		['variety' => 'Mottled'],						// 70
		['variety' => 'Narragansett'],					// 71
		['variety' => 'Non Bearded Black'],				// 72
		['variety' => 'Non Bearded Black Crested White'],// 73
		['variety' => 'Non Bearded Blue'],				// 74
		['variety' => 'Non Bearded Buff'],				// 75
		['variety' => 'Non Bearded Buff Laced'],		// 76
		['variety' => 'Non Bearded Gray'],				// 77
		['variety' => 'Non Bearded Golden'],			// 78
		['variety' => 'Non Bearded Partridge'],			// 79
		['variety' => 'Non Bearded Silver'],			// 80
		['variety' => 'Non Bearded White'],				// 81
		['variety' => 'Non Bearded White Crested Black'],//82
		['variety' => 'Non Bearded White Crested Blue'],// 83
		['variety' => 'Partridge'],						// 84
		['variety' => 'Pastel'],						// 85
		['variety' => 'Pearl'],							// 86
		['variety' => 'Penciled'],						// 87
		['variety' => 'Porcelain'],						// 88
		['variety' => 'Quail'],							// 89
		['variety' => 'Red'],							// 90
		['variety' => 'Red Pyle'],						// 91
		['variety' => 'Red Shouldered'],				// 92
		['variety' => 'Rose Comb'],						// 93
		['variety' => 'Rose Comb Black'],				// 94
		['variety' => 'Rose Comb Buff'],				// 95
		['variety' => 'Rose Comb Cuckoo'],				// 96
		['variety' => 'Rose Comb Dark Brown'],			// 97
		['variety' => 'Rose Comb Golden'],				// 98
		['variety' => 'Rose Comb Light Brown'],			// 99	
		['variety' => 'Rose Comb Silver'],				// 100
		['variety' => 'Rose Comb White'],				// 101
		['variety' => 'Royal Palm'],					// 102
		['variety' => 'Saddleback'],					// 103
		['variety' => 'Salmon'],						// 104
		['variety' => 'Self Blue'],						// 105
		['variety' => 'Sex-Linked'],					// 106
		['variety' => 'Silver'],						// 107
		['variety' => 'Silver Blue'],					// 108
		['variety' => 'Silver Duckwing'],				// 109
		['variety' => 'Silver Gray'],					// 110
		['variety' => 'Silver Laced'],					// 111
		['variety' => 'Silver Penciled'],				// 112
		['variety' => 'Silver Spangled'],				// 113
		['variety' => 'Single Comb'],					// 114
		['variety' => 'Single Comb Black'],				// 115
		['variety' => 'Single Comb Black-Tailed Red'],	// 116
		['variety' => 'Single Comb Buff'],				// 117
		['variety' => 'Single Comb Columbian'],			// 118
		['variety' => 'Single Comb Cuckoo'],			// 119
		['variety' => 'Single Comb Dark Brown'],		// 120
		['variety' => 'Single Comb Golden'],			// 121
		['variety' => 'Single Comb Light Brown'],		// 122
		['variety' => 'Single Comb Red'],				// 123
		['variety' => 'Single Comb Silver'],			// 124
		['variety' => 'Single Comb White'],				// 125
		['variety' => 'Slate'],							// 126
		['variety' => 'Snowy'],							// 127
		['variety' => 'Spangled'],						// 128
		['variety' => 'Speckled'],						// 129
		['variety' => 'Tufted'],						// 130
		['variety' => 'Wheaten'],						// 131
		['variety' => 'White'],							// 132 
		['variety' => 'White Holland'],					// 133
		['variety' => 'White Laced Red'], 				// 134
        ]);
    }
}

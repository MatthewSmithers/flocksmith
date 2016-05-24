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
        DB::table('varieties')->insert(array(
		array('variety' => 'American'),				// 1
		array('variety' => 'Barred'),				// 2
		array('variety' => 'Bearded Black'),		// 3
		array('variety' => 'Bearded Blue'),			// 4
		array('variety' => 'Bearded Buff'),			// 5
		array('variety' => 'Bearded Buff Laced'),	// 6
		array('variety' => 'Bearded Gray'),			// 7
		array('variety' => 'Bearded Golden'),		// 8
		array('variety' => 'Bearded Golden Neck'),	// 9
		array('variety' => 'Bearded Mille Fleur'),	// 10
		array('variety' => 'Bearded Mottled'),		// 11
		array('variety' => 'Bearded Partridge'),	// 12
		array('variety' => 'Bearded Porcelain'),	// 13
		array('variety' => 'Bearded Self Blue'),	// 14
		array('variety' => 'Bearded Silver'),		// 15
		array('variety' => 'Bearded Splash'),		// 16
		array('variety' => 'Bearded White'),		// 17
		array('variety' => 'Beltsville Small White'),//18
		array('variety' => 'Birchen'),				// 19
		array('variety' => 'Black'),				// 20
		array('variety' => 'Black Frizzle'),		// 21
		array('variety' => 'Black & White'),		// 22
		array('variety' => 'Black Breasted Red'),	// 23
		array('variety' => 'Black Tailed Buff'),	// 24
		array('variety' => 'Black Tailed Red'),		// 25
		array('variety' => 'Blue'),					// 26
		array('variety' => 'Blue & White'),			// 27
		array('variety' => 'Blue Brassy Back'),		// 28
		array('variety' => 'Blue Breasted Red'),	// 29
		array('variety' => 'Blue Cream Light Brown'),//30
		array('variety' => 'Blue Golden Duckwing'),	// 31
		array('variety' => 'Blue Laced Red'),		// 32
		array('variety' => 'Blue Light Brown Dutch'),//33
		array('variety' => 'Blue Silver Duckwing'),	// 34
		array('variety' => 'Blue Wheaten'),			// 35
		array('variety' => 'Bourbon Red'),			// 36
		array('variety' => 'Butterscotch'),			// 37
		array('variety' => 'Brassy Back'),			// 38
		array('variety' => 'Bronze'),				// 39
		array('variety' => 'Brown'),				// 40
		array('variety' => 'Brown Red'),			// 41
		array('variety' => 'Buff'),					// 42
		array('variety' => 'Buff Columbian'),		// 43
		array('variety' => 'Chocolate'),			// 44
		array('variety' => 'Colored'),				// 45
		array('variety' => 'Columbian'),			// 46
		array('variety' => 'Cream Light Brown'),	// 47
		array('variety' => 'Crele'),				// 48
		array('variety' => 'Cuckoo'),				// 49
		array('variety' => 'Cumberland Blue'),		// 50
		array('variety' => 'Dark'),					// 51
		array('variety' => 'Dark Brown'),			// 52
		array('variety' => 'Eastern'),				// 53
		array('variety' => 'Fawn & White'),			// 54
		array('variety' => 'Fawn Silver Duckwing'),	// 55
		array('variety' => 'Ginger Red'),			// 56
		array('variety' => 'Golden'),				// 57
		array('variety' => 'Golden Duckwing'),		// 58
		array('variety' => 'Golden Penciled'),		// 59
		array('variety' => 'Golden Laced'),			// 60
		array('variety' => 'Golden Spangled'),		// 61
		array('variety' => 'Gray'),					// 62
		array('variety' => 'Khaki'),				// 63
		array('variety' => 'Lavender'),				// 64
		array('variety' => 'Lemon Blue'),			// 65
		array('variety' => 'Light'),				// 66
		array('variety' => 'Light Brown'),			// 67
		array('variety' => 'Mille Fleur'),			// 68
		array('variety' => 'Mottled'),				// 69
		array('variety' => 'Narragansett'),			// 70
		array('variety' => 'Non Bearded Black'),	// 71
		array('variety' => 'Non Bearded Black Crested White'),// 72
		array('variety' => 'Non Bearded Blue'),		// 73
		array('variety' => 'Non Bearded Buff'),		// 74
		array('variety' => 'Non Bearded Buff Laced'),//75
		array('variety' => 'Non Bearded Gray'),		// 76
		array('variety' => 'Non Bearded Golden'),	// 77
		array('variety' => 'Non Bearded Partridge'),// 78
		array('variety' => 'Non Bearded Silver'),	// 79
		array('variety' => 'Non Bearded White'),	// 80
		array('variety' => 'Non Bearded White Crested Black'),//81
		array('variety' => 'Non Bearded White Crested Blue'),//	82
		array('variety' => 'Partridge'),			// 83
		array('variety' => 'Pastel'),				// 84
		array('variety' => 'Pearl'),				// 85
		array('variety' => 'Penciled'),				// 86
		array('variety' => 'Porcelain'),			// 87
		array('variety' => 'Quail'),				// 88
		array('variety' => 'Red'),					// 89
		array('variety' => 'Red Pyle'),				// 90
		array('variety' => 'Red Shouldered'),		// 91
		array('variety' => 'Rose Comb'),			// 92
		array('variety' => 'Rose Comb Black'),		// 93
		array('variety' => 'Rose Comb Buff'),		// 94
		array('variety' => 'Rose Comb Cuckoo'),		// 95

		array('variety' => 'Rose Comb Dark Brown'),	// 96
		array('variety' => 'Rose Comb Golden'),		// 97
		array('variety' => 'Rose Comb Light Brown'),// 98	
		array('variety' => 'Rose Comb Silver'),		// 99
		array('variety' => 'Rose Comb White'),		// 100
		array('variety' => 'Royal Palm'),			// 101
		array('variety' => 'Saddleback'),			// 102
		array('variety' => 'Salmon'),				// 103
		array('variety' => 'Self Blue'),			// 104
		array('variety' => 'Sex-Linked'),			// 105
		array('variety' => 'Silver'),				// 106
		array('variety' => 'Silver Blue'),			// 107
		array('variety' => 'Silver Duckwing'),		// 108
		array('variety' => 'Silver Gray'),			// 109
		array('variety' => 'Silver Laced'),			// 110
		array('variety' => 'Silver Penciled'),		// 111
		array('variety' => 'Silver Spangled'),		// 112
		array('variety' => 'Single Comb'),			// 113
		array('variety' => 'Single Comb Black'),	// 114
		array('variety' => 'Single Comb Black-Tailed Red'),//115
		array('variety' => 'Single Comb Buff'),		// 116
		array('variety' => 'Single Comb Columbian'),// 117
		array('variety' => 'Single Comb Cuckoo'),	// 118
		array('variety' => 'Single Comb Dark Brown'),//119

		array('variety' => 'Single Comb Golden'),	// 120
		array('variety' => 'Single Comb Light Brown'),//121
		array('variety' => 'Single Comb Red'),		// 122
		array('variety' => 'Single Comb Silver'),	// 123
		array('variety' => 'Single Comb White'),	// 124
		array('variety' => 'Slate'),				// 125
		array('variety' => 'Snowy'),				// 126
		array('variety' => 'Spangled'),				// 127
		array('variety' => 'Speckled'),				// 128
		array('variety' => 'Tufted'),				// 129
		array('variety' => 'Wheaten'),				// 130
		array('variety' => 'White'),				// 131
		array('variety' => 'White Holland'),		// 132
		array('variety' => 'White Laced Red'), 		// 133
		array('variety' => 'Black Tailed White')	// 134
		
        ));
    }
}

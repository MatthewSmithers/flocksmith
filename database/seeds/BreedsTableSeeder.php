<?php namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete breeds table records
         DB::table('breeds')->delete();


         //insert APA breed records
         DB::table('breeds')->insert([
             ['breed'=>'African','history'=>'Zulu warrior geese'],
             ['breed'=>'Ameraucana','history'=>'from south america'],
             ['breed'=>'Andalusian','history'=>'from puerto rico'],
             ['breed'=>'Ancona','history'=>'Not Ninga'],
             ['breed'=>'Appleyard','history'=>'Laravel Ninga'],
             ['breed'=>'Araucana','history'=>'HTML Ninga'],
             ['breed'=>'Aseel','history'=>'CSS Ninga'],
             ['breed'=>'Australorp','history'=>'Laravel Ninga'],
             ['breed'=>'Aylesbury','history'=>'Laravel Ninga'],
             ['breed'=>'Barnevelder','history'=>'Laravel Ninga'],
             ['breed'=>'Belgian Bearded d\'Anvers','history'=>'Laravel Ninga'],
             ['breed'=>'Belgian Bearded d\'Uccle','history'=>'from Belgium with love'],
             ['breed'=>'Brahma','history'=>'from south america'],
             ['breed'=>'Buckeye','history'=>'from puerto rico'],
             ['breed'=>'Buff','history'=>'Not Ninga'],
             ['breed'=>'Buff','history'=>'HTML Ninga'],
             ['breed'=>'Booted','history'=>'CSS Ninga'],
             ['breed'=>'Call','history'=>'Laravel Ninga'],
             ['breed'=>'Campbell','history'=>'Laravel Ninga'],
             ['breed'=>'Campine','history'=>'Laravel Ninga'],
             ['breed'=>'Canada','history'=>'Laravel Ninga'],
             ['breed'=>'Catalana','history'=>'Laravel Ninga'],
             ['breed'=>'Cayuga','history'=>'Zulu warrior geese'],
             ['breed'=>'Chanticleer','history'=>'from south america'],
             ['breed'=>'Chinese','history'=>'from puerto rico'],
             ['breed'=>'Cochin','history'=>'Not Ninga'],
             ['breed'=>'Cornish','history'=>'HTML Ninga'],
             ['breed'=>'Crested','history'=>'CSS Ninga'],
             ['breed'=>'Crevecoeur','history'=>'Laravel Ninga'],
             ['breed'=>'Cubalaya','history'=>'Laravel Ninga'],
             ['breed'=>'Delaware','history'=>'Laravel Ninga'],
             ['breed'=>'Dominique','history'=>'Laravel Ninga'],
             ['breed'=>'Dorking','history'=>'Laravel Ninga'],
             ['breed'=>'Dutch','history'=>'Zulu warrior geese'],
             ['breed'=>'East Indie','history'=>'from south america'],
             ['breed'=>'Egyptian','history'=>'from puerto rico'],
             ['breed'=>'Embden','history'=>'Not Ninga'],
             ['breed'=>'Faverolle','history'=>'HTML Ninga'],
             ['breed'=>'Game','history'=>'CSS Ninga'],
             ['breed'=>'Japanese','history'=>'Laravel Ninga'],
             ['breed'=>'Java','history'=>'Laravel Ninga'],
             ['breed'=>'Jersey Giant','history'=>'Laravel Ninga'],
             ['breed'=>'Hamburg','history'=>'Laravel Ninga'],
             ['breed'=>'Holland','history'=>'Laravel Ninga'],
             ['breed'=>'Houdan','history'=>'Zulu warrior geese'],
             ['breed'=>'La Fleche','history'=>'from south america'],
             ['breed'=>'Lakenvelder','history'=>'from puerto rico'],
             ['breed'=>'Lamona','history'=>'from Niagra Falls, New Mexico'],
             ['breed'=>'Langshan','history'=>'Not Ninga'],
             ['breed'=>'Leghorn','history'=>'HTML Ninga'],
             ['breed'=>'Magpie','history'=>'CSS Ninga'],
             ['breed'=>'Malay','history'=>'Laravel Ninga'],
             ['breed'=>'Mallard','history'=>'Laravel Ninga'],
             ['breed'=>'Minorca','history'=>'Laravel Ninga'],
             ['breed'=>'Modern Game','history'=>'Laravel Ninga'],
             ['breed'=>'Muscovy','history'=>'Laravel Ninga'],
             ['breed'=>'Naked Neck','history'=>'Zulu warrior geese'],
             ['breed'=>'New Hampshire','history'=>'from south america'],
             ['breed'=>'Orpington','history'=>'from puerto rico'],
             ['breed'=>'Old English Game','history'=>'Not Ninga'],
             ['breed'=>'Pekin','history'=>'HTML Ninga'],
             ['breed'=>'Plymouth Rock','history'=>'CSS Ninga'],
             ['breed'=>'Phoenix','history'=>'Laravel Ninga'],
             ['breed'=>'Polish','history'=>'Laravel Ninga'],
             ['breed'=>'Pilgrim','history'=>'Laravel Ninga'],
             ['breed'=>'Red Cap','history'=>'Laravel Ninga'],
             ['breed'=>'Rhode Island Red','history'=>'Laravel Ninga'],
             ['breed'=>'Rhode Island White','history'=>'Zulu warrior geese'],
             ['breed'=>'Rouen','history'=>'from south america'],
             ['breed'=>'Pomeranian','history'=>'from Puerto rico'],
             ['breed'=>'Saxony','history'=>'Not Ninga'],
             ['breed'=>'Sebastopol','history'=>'HTML Ninga'],
             ['breed'=>'Sebright','history'=>'CSS Ninga'],
             ['breed'=>'Shamo','history'=>'Laravel Ninga'],
             ['breed'=>'Sicilian Buttercup','history'=>'Laravel Ninga'],
             ['breed'=>'Silkie','history'=>'Laravel Ninga'],
             ['breed'=>'Sultan','history'=>'Laravel Ninga'],
             ['breed'=>'Sumatra','history'=>'Laravel Ninga'],
             ['breed'=>'Sussex','history'=>'Laravel Ninga'],
             ['breed'=>'Swedish','history'=>'Zulu warrior geese'],
             ['breed'=>'Toulouse','history'=>'from south america'],
             ['breed'=>'Welsh Harlequin','history'=>'from puerto rico'],
             ['breed'=>'Wellsummer','history'=>'Not Ninga'],
             ['breed'=>'White Faced Black Spanish','history'=>'HTML Ninga'],
             ['breed'=>'Wyandotte','history'=>'CSS Ninga'],
             ['breed'=>'Yokohama','history'=>'Laravel Ninga'],
             ['breed'=>'American Game','history'=>'Sent to the end of the line!'],
             ['breed'=>'Rosecomb','history'=>'Somehow I missed this one'],
             ['breed' => 'Runner', 'history' => 'Another one missed! This one a duck.'],
             ['breed' => 'American Buff', 'history' => 'Dumb goose...'],
             ['breed' => 'Saddleback Pomeranian', 'history' => 'Another Dumb goose...'],
             ['breed' => 'Tufted Roman', 'history' => 'The one that got away...'],
             ['breed' => 'Turkey', 'history' => 'Gobble gobble...'],
             ['breed' => 'Guinea Fowl', 'history' => 'Obnoxious bird sounds like a squeaky hinge..'],
          ]);
    }
}

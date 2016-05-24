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
         DB::table('breeds')->insert(array(
             array('breed'=>'African','history'=>'Zulu warrior geese'),
             array('breed'=>'Ameraucana','history'=>'from south america'),
             array('breed'=>'Andalusian','history'=>'from puerto rico'),
             array('breed'=>'Ancona','history'=>'Not Ninga'),
             array('breed'=>'Appleyard','history'=>'Laravel Ninga'),
             array('breed'=>'Araucana','history'=>'HTML Ninga'),
             array('breed'=>'Aseel','history'=>'CSS Ninga'),
             array('breed'=>'Australorp','history'=>'Laravel Ninga'),
             array('breed'=>'Aylesbury','history'=>'Laravel Ninga'),
             array('breed'=>'Barnevelder','history'=>'Laravel Ninga'),
             array('breed'=>'Belgian Bearded d\'Anvers','history'=>'Laravel Ninga'),
             array('breed'=>'Belgian Bearded d\'Uccle','history'=>'from Belgium with love'),
             array('breed'=>'Brahma','history'=>'from south america'),
             array('breed'=>'Buckeye','history'=>'from puerto rico'),
             array('breed'=>'Buff','history'=>'Not Ninga'),
             array('breed'=>'Buff','history'=>'HTML Ninga'),
             array('breed'=>'Booted','history'=>'CSS Ninga'),
             array('breed'=>'Call','history'=>'Laravel Ninga'),
             array('breed'=>'Campbell','history'=>'Laravel Ninga'),
             array('breed'=>'Campine','history'=>'Laravel Ninga'),
             array('breed'=>'Canada','history'=>'Laravel Ninga'),
             array('breed'=>'Catalana','history'=>'Laravel Ninga'),
             array('breed'=>'Cayuga','history'=>'Zulu warrior geese'),
             array('breed'=>'Chanticleer','history'=>'from south america'),
             array('breed'=>'Chinese','history'=>'from puerto rico'),
             array('breed'=>'Cochin','history'=>'Not Ninga'),
             array('breed'=>'Cornish','history'=>'HTML Ninga'),
             array('breed'=>'Crested','history'=>'CSS Ninga'),
             array('breed'=>'Crevecoeur','history'=>'Laravel Ninga'),
             array('breed'=>'Cubalaya','history'=>'Laravel Ninga'),
             array('breed'=>'Delaware','history'=>'Laravel Ninga'),
             array('breed'=>'Dominique','history'=>'Laravel Ninga'),
             array('breed'=>'Dorking','history'=>'Laravel Ninga'),
             array('breed'=>'Dutch','history'=>'Zulu warrior geese'),
             array('breed'=>'East Indie','history'=>'from south america'),
             array('breed'=>'Egyptian','history'=>'from puerto rico'),
             array('breed'=>'Embden','history'=>'Not Ninga'),
             array('breed'=>'Faverolle','history'=>'HTML Ninga'),
             array('breed'=>'Game','history'=>'CSS Ninga'),
             array('breed'=>'Japanese','history'=>'Laravel Ninga'),
             array('breed'=>'Java','history'=>'Laravel Ninga'),
             array('breed'=>'Jersey Giant','history'=>'Laravel Ninga'),
             array('breed'=>'Hamburg','history'=>'Laravel Ninga'),
             array('breed'=>'Holland','history'=>'Laravel Ninga'),
             array('breed'=>'Houdan','history'=>'Zulu warrior geese'),
             array('breed'=>'La Fleche','history'=>'from south america'),
             array('breed'=>'Lakenvelder','history'=>'from puerto rico'),
             array('breed'=>'Lamona','history'=>'from Niagra Falls, New Mexico'),
             array('breed'=>'Langshan','history'=>'Not Ninga'),
             array('breed'=>'Leghorn','history'=>'HTML Ninga'),
             array('breed'=>'Magpie','history'=>'CSS Ninga'),
             array('breed'=>'Malay','history'=>'Laravel Ninga'),
             array('breed'=>'Mallard','history'=>'Laravel Ninga'),
             array('breed'=>'Minorca','history'=>'Laravel Ninga'),
             array('breed'=>'Modern Game','history'=>'Laravel Ninga'),
             array('breed'=>'Muscovy','history'=>'Laravel Ninga'),
             array('breed'=>'Naked Neck','history'=>'Zulu warrior geese'),
             array('breed'=>'New Hampshire','history'=>'from south america'),
             array('breed'=>'Orpington','history'=>'from puerto rico'),
             array('breed'=>'Old English Game','history'=>'Not Ninga'),
             array('breed'=>'Pekin','history'=>'HTML Ninga'),
             array('breed'=>'Plymouth Rock','history'=>'CSS Ninga'),
             array('breed'=>'Phoenix','history'=>'Laravel Ninga'),
             array('breed'=>'Polish','history'=>'Laravel Ninga'),
             array('breed'=>'Pilgrim','history'=>'Laravel Ninga'),
             array('breed'=>'Red Cap','history'=>'Laravel Ninga'),
             array('breed'=>'Rhode Island Red','history'=>'Laravel Ninga'),
             array('breed'=>'Rhode Island White','history'=>'Zulu warrior geese'),
             array('breed'=>'Rouen','history'=>'from south america'),
             array('breed'=>'Pomeranian','history'=>'from Puerto rico'),
             array('breed'=>'Saxony','history'=>'Not Ninga'),
             array('breed'=>'Sebastopol','history'=>'HTML Ninga'),
             array('breed'=>'Sebright','history'=>'CSS Ninga'),
             array('breed'=>'Shamo','history'=>'Laravel Ninga'),
             array('breed'=>'Sicilian Buttercup','history'=>'Laravel Ninga'),
             array('breed'=>'Silkie','history'=>'Laravel Ninga'),
             array('breed'=>'Sultan','history'=>'Laravel Ninga'),
             array('breed'=>'Sumatra','history'=>'Laravel Ninga'),
             array('breed'=>'Sussex','history'=>'Laravel Ninga'),
             array('breed'=>'Swedish','history'=>'Zulu warrior geese'),
             array('breed'=>'Toulouse','history'=>'from south america'),
             array('breed'=>'Welsh Harlequin','history'=>'from puerto rico'),
             array('breed'=>'Wellsummer','history'=>'Not Ninga'),
             array('breed'=>'White Faced Black Spanish','history'=>'HTML Ninga'),
             array('breed'=>'Wyandotte','history'=>'CSS Ninga'),
             array('breed'=>'Yokohama','history'=>'Laravel Ninga'),
             array('breed'=>'American Game','history'=>'Sent to the end of the line!'),
             array('breed'=>'Rosecomb','history'=>'Somehow I missed this one'),
             array('breed' => 'Runner', 'history' => 'Another one missed! This one a duck.'),
             array('breed' => 'American Buff', 'history' => 'Dumb goose...'),
             array('breed' => 'Saddleback Pomeranian', 'history' => 'Another Dumb goose...'),
             array('breed' => 'Tufted Roman', 'history' => 'The one that got away...'),
             array('breed' => 'Turkey', 'history' => 'Gobble gobble...'),
             array('breed' => 'Guinea Fowl', 'history' => 'Obnoxious bird sounds like a squeaky hinge..'),
          ));
    }
}

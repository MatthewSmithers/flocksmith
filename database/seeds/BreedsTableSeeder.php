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
             array('poultry_type_id'=>'6','breed'=>'African','history'=>'Zulu warrior geese'),
             array('poultry_type_id'=>'1','breed'=>'Ameraucana','history'=>'from south america'),
             array('poultry_type_id'=>'1','breed'=>'Andalusian','history'=>'from puerto rico'),
             array('poultry_type_id'=>'2','breed'=>'Ancona','history'=>'Not Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Appleyard','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'6','breed'=>'Araucana','history'=>'HTML Ninga'),
             array('poultry_type_id'=>'4','breed'=>'Aseel','history'=>'CSS Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Australorp','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Aylesbury','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Bantam','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Barnevelder','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Belgian Bearded d\'Anvers','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'6','breed'=>'Belgian Bearded d\'Uccle','history'=>'from Belgium with love'),
             array('poultry_type_id'=>'1','breed'=>'Brahma','history'=>'from south america'),
             array('poultry_type_id'=>'1','breed'=>'Buckeye','history'=>'from puerto rico'),
             array('poultry_type_id'=>'2','breed'=>'Buff','history'=>'Not Ninga'),
             array('poultry_type_id'=>'6','breed'=>'Buff','history'=>'HTML Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Booted','history'=>'CSS Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Call','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Campbell','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Campine','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'6','breed'=>'Canada','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Catalina','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Cayuga','history'=>'Zulu warrior geese'),
             array('poultry_type_id'=>'1','breed'=>'Chanticleer','history'=>'from south america'),
             array('poultry_type_id'=>'6','breed'=>'Chinese','history'=>'from puerto rico'),
             array('poultry_type_id'=>'1','breed'=>'Cochin','history'=>'Not Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Cornish','history'=>'HTML Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Crested','history'=>'CSS Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Crevecoeur','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Cubalaya','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Delaware','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Dominique','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Dorking','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Dutch','history'=>'Zulu warrior geese'),
             array('poultry_type_id'=>'2','breed'=>'East Indie','history'=>'from south america'),
             array('poultry_type_id'=>'6','breed'=>'Egyptian','history'=>'from puerto rico'),
             array('poultry_type_id'=>'6','breed'=>'Embden','history'=>'Not Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Faverolle','history'=>'HTML Ninga'),
             array('poultry_type_id'=>'4','breed'=>'Game','history'=>'CSS Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Japanese','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Java','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Jersey Giant','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Hamburg','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Holland','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Houdan','history'=>'Zulu warrior geese'),
             array('poultry_type_id'=>'1','breed'=>'La Fleche','history'=>'from south america'),
             array('poultry_type_id'=>'1','breed'=>'Lakenvelder','history'=>'from puerto rico'),
             array('poultry_type_id'=>'1','breed'=>'Langshan','history'=>'Not Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Leghorn','history'=>'HTML Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Magpie','history'=>'CSS Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Malay','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Mallard','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Minorca','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'4','breed'=>'Modern Game','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Muscovy','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Naked Neck','history'=>'Zulu warrior geese'),
             array('poultry_type_id'=>'1','breed'=>'New Hampshire','history'=>'from south america'),
             array('poultry_type_id'=>'1','breed'=>'Orpington','history'=>'from puerto rico'),
             array('poultry_type_id'=>'4','breed'=>'Old English Game','history'=>'Not Ninga'),
             array('poultry_type_id'=>'2','breed'=>'Pekin','history'=>'HTML Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Plymouth Rock','history'=>'CSS Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Phoenix','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Polish','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'6','breed'=>'Pilgrim','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Red Cap','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Rhode Island Red','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Rhode Island White','history'=>'Zulu warrior geese'),
             array('poultry_type_id'=>'2','breed'=>'Rouen','history'=>'from south america'),
             array('poultry_type_id'=>'6','breed'=>'Pomeranian','history'=>'from Puerto rico'),
             array('poultry_type_id'=>'2','breed'=>'Saxony','history'=>'Not Ninga'),
             array('poultry_type_id'=>'6','breed'=>'Sebastopol','history'=>'HTML Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Sebright','history'=>'CSS Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Shamo','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Sicilian Buttercup','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Silkie','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Sultan','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Sumatra','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Sussex','history'=>'Laravel Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Swedish','history'=>'Zulu warrior geese'),
             array('poultry_type_id'=>'6','breed'=>'Toulouse','history'=>'from south america'),
             array('poultry_type_id'=>'1','breed'=>'Welsh Harlequin','history'=>'from puerto rico'),
             array('poultry_type_id'=>'1','breed'=>'Wellsummer','history'=>'Not Ninga'),
             array('poultry_type_id'=>'1','breed'=>'White Faced Black Spanish','history'=>'HTML Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Wyandotte','history'=>'CSS Ninga'),
             array('poultry_type_id'=>'1','breed'=>'Yokohama','history'=>'Laravel Ninga')
          ));
    }
}

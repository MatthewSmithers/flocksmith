<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Database\Seeds\PoultryTypesTableSeeder;
use Database\Seeds\ClassificationsTableSeeder;
use Database\Seeds\VarietiesTableSeeder;
use Database\Seeds\BreedsTableSeeder;
use Database\Seeds\AnatomyTableSeeder;
use Database\Seeds\GenderTypesTableSeeder;
use Database\Seeds\BreedClassificationTableSeeder;


class DatabaseSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		Model::unguard();

		//disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		//$this->call(UsersTableSeeder::class);
		$this->call(PoultryTypesTableSeeder::class);
		$this->call(ClassificationsTableSeeder::class);
		$this->call(VarietiesTableSeeder::class);
		$this->call(AnatomyTableSeeder::class);
		$this->call(GenderTypesTableSeeder::class);
		$this->call(BreedsTableSeeder::class);
		$this->call(PoultryTableSeeder::class);
		$this->call(ClassificationPoultryTableSeeder::class);

		// supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
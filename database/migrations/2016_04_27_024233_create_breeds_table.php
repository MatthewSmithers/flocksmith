<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breeds', function ($table) {
            $table->increments('id');
            $table->string('breed');
            $table->string('history');
            $table->timestamps();
        });

        Schema::table('breeds', function (Blueprint $table){
            $table->integer('poultry_type_id')->unsigned();
            $table->foreign('poultry_type_id')->references('id')->on('poultry_types')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('breeds');
    }
}

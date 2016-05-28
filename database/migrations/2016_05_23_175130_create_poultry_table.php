<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoultryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poultry', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poultry_type_id')->unsigned()->index();
            $table->foreign('poultry_type_id')->references('id')->on('poultry_types')->onDelete('cascade');
            $table->integer('variety_id')->unsigned()->index();
            $table->foreign('variety_id')->references('id')->on('varieties')->onDelete('cascade');
            $table->integer('breed_id')->unsigned()->index();
            $table->foreign('breed_id')->references('id')->on('breeds')->onDelete('cascade');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('poultry');
    }
}

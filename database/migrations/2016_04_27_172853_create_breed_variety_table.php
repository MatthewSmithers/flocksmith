<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedVarietyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breed_variety', function (Blueprint $table) {
            $table->integer('breed_id')->unsigned()->index();
            $table->foreign('breed_id')->references('id')->on('breeds')->onDelete('cascade');
            $table->integer('variety_id')->unsigned()->index();
            $table->foreign('variety_id')->references('id')->on('varieties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('breed_variety');
    }
}

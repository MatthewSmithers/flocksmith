<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandardWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standard_weights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poultry_type_id')->unsigned()->index();
            $table->foreign('poultry_type_id')->references('id')->on('poultry_types')->onDelete('cascade');
            $table->integer('breed_id')->unsigned()->index();
            $table->foreign('breed_id')->references('id')->on('breeds')->onDelete('cascade');
            $table->integer('gender_role_id')->unsigned()->index();
            $table->foreign('gender_role_id')->references('id')->on('gender_roles')->onDelete('cascade');
            $table->string('standard_weight');
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
        Schema::drop('standard_weights');
    }
}

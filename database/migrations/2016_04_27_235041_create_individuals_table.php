<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('breed_id')->unsigned()->index();
            $table->foreign('breed_id')->references('id')->on('breeds')->onDelete('cascade');
            $table->integer('gender_type_id')->unsigned()->index();
            $table->foreign('gender_type_id')->references('id')->on('gender_types')->onDelete('cascade');
            $table->integer('gender_role_id')->unsigned()->index();
            $table->foreign('gender_role_id')->references('id')->on('gender_roles')->onDelete('cascade');
            $table->string('name');
            $table->string('legband');
            $table->string('wingband');
            $table->integer('age');
            $table->string('weight');
            $table->string('hatch_date');
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
        Schema::drop('individuals');
    }
}

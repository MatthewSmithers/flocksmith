<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDameIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dame_individual', function (Blueprint $table) {
            $table->integer('individual_id')->unsigned()->index();
            $table->foreign('individual_id')->references('id')->on('individuals')->onDelete('cascade');
            $table->integer('dame_id')->unsigned()->index();
            $table->foreign('dame_id')->references('id')->on('dames')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dame_individual');
    }
}

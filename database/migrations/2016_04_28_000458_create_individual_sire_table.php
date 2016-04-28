<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualSireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_sire', function (Blueprint $table) {
            $table->integer('individual_id')->unsigned()->index();
            $table->foreign('individual_id')->references('id')->on('individuals')->onDelete('cascade');
            $table->integer('sire_id')->unsigned()->index();
            $table->foreign('sire_id')->references('id')->on('sires')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('individual_sire');
    }
}

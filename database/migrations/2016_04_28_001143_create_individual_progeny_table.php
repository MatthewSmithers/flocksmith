<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualProgenyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_progeny', function (Blueprint $table) {
            $table->integer('individual_id')->unsigned()->index();
            $table->foreign('individual_id')->references('id')->on('individuals')->onDelete('cascade');
            $table->integer('progeny_id')->unsigned()->index();
            $table->foreign('progeny_id')->references('id')->on('progeny')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('individual_progeny');
    }
}

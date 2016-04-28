<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualSiblingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_sibling', function (Blueprint $table) {
            $table->integer('individual_id')->unsigned()->index();
            $table->foreign('individual_id')->references('id')->on('individuals')->onDelete('cascade');
            $table->integer('sibling_id')->unsigned()->index();
            $table->foreign('sibling_id')->references('id')->on('siblings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('individual_sibling');
    }
}

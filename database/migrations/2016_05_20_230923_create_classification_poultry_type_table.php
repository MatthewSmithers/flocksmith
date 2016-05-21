<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassificationPoultryTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('classification_poultry_type', function (Blueprint $table) {
            $table->integer('poultry_type_id')->unsigned()->index();
            $table->foreign('poultry_type_id')->references('id')->on('poultry_types')->onDelete('cascade');
            $table->integer('classification_id')->unsigned()->index();
            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('classification_poultry_type');
    }
}

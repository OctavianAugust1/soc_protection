<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('populations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_populations_categories')->unsigned();
            $table->foreign('id_populations_categories')->references('id')->on('populations_categories');
            $table->bigInteger('id_cities')->unsigned();
            $table->foreign('id_cities')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('populations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvalidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invalids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_cities')->unsigned();
            $table->foreign('id_cities')->references('id')->on('cities');
            $table->bigInteger('id_invalids_categories')->unsigned();
            $table->foreign('id_invalids_categories')->references('id')->on('invalids_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invalids');
    }
}

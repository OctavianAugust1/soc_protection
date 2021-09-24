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
            $table->integer('id_cities');
            $table->foreign('id_cities')->references('id')->on('cities');
            $table->integer('id_invalids_categories');
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

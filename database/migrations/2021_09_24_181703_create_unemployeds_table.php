<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnemployedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unemployeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_cities')->unsigned();
            $table->foreign('id_cities')->references('id')->on('cities');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unemployeds');
    }
}

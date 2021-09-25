<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvalidsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invalids_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
        });

        $titles = array(
            'Инвалиды 1 группы',
            'Инвалиды 2 группы',
            'Инвалиды 3 группы',
            'Дети инвалиды',
        );
        for ($i = 0; $i < 4; $i++) {
            DB::table('invalids_categories')->insert(['title' => $titles[$i]]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invalids_categories');
    }
}

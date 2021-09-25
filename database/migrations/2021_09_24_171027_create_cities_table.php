<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cities = array(
            'Ижевск',
            'Воткинск',
            'Воткинский район',
            'Глазов',
            'Глазовский район',
            'Можга',
            'Можгинский район',
            'Сарапул',
            'Сарапульский район',
            'Алнашский',
            'Балезинский',
            'Вавожский',
            'Граховский',
            'Дебесский',
            'Завьяловский',
            'Игринский',
            'Камбарский',
            'Каракулинский',
            'Кезский',
            'Кизнерский',
            'Киясовский',
            'Красногорский',
            'Малопургинский',
            'Селтинский',
            'Сюмсинский',
            'Увинский',
            'Шарканский',
            'Юкаменский',
            'Якшур-бодьинский',
            'Ярский',
        );
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
        });

        foreach ($cities as $city) {
            DB::table('cities')->insert(['title' => $city]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}

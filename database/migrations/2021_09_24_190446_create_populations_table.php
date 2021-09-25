<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Population;

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
            $table->bigInteger('id_cities')->unsigned();
            $table->foreign('id_cities')->references('id')->on('cities');
            $table->integer('quantity');
        });

        $title = array(
            'Ижевск',
            'Индустриальный',
            'Ленинский',
            'Октябрьский',
            'Первомайский',
            'Устиновский',
            'Воткинск',
            'Глазов',
            'Можга',
            'Сарапул',
            'Алнашский',
            'Балезинский',
            'Вавожский',
            'Воткинский',
            'Глазовский',
            'Граховский',
            'Дебёсский',
            'Завьяловский',
            'Игринский',
            'Камбарский',
            'Камбарка',
            'Каракулинский',
            'Кезский',
            'Кизнерский',
            'Киясовский',
            'Красногорский',
            'Малопургинский',
            'Можгинский',
            'Сарапульский',
            'Селтинский',
            'Сюмсинский',
            'Увинский',
            'Шарканский',
            'Юкаменский',
            'Якшур',
            'Ярский',
        );
        $quantity = array(
            646468,
            121753,
            126901,
            133912,
            126877,
            137025,
            96861,
            91921,
            48750,
            94554,
            17978,
            29263,
            14810,
            24491,
            14870,
            7598,
            11520,
            80665,
            35151,
            16239,
            10048,
            10028,
            19215,
            16857,
            8717,
            8364,
            33183,
            25152,
            23449,
            9707,
            11426,
            37662,
            17890,
            7854,
            20282,
            12431,
        );
        $cities = DB::table('cities')->pluck('id');
        for ($i = 0; $i < count($cities); $i++) {
            Population::insert([
                'id_cities' => $cities[$i],
                'quantity' => $quantity[$i],
            ]);
        }
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

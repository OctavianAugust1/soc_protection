<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Municipality;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('salaries');
            $table->unsignedBigInteger('id_cities');
            $table->foreign('id_cities')->references('id')->on('cities');
        });

        $municipalities = array(
            'Алнашский муниципальный район',
            'Балезинский муниципальный район',
            'Вавожский муниципальный район',
            'Воткинский муниципальный район',
            'Глазовский муниципальный район',
            'Граховский муниципальный район',
            'Дебесский муниципальный район',
            'Завьяловский муниципальный район',
            'Игринский муниципальный район',
            'Камбарский муниципальный район',
            'Каракулинский муниципальный район',
            'Кезский муниципальный район',
            'Кизнерский муниципальный район',
            'Киясовский муниципальный район',
            'Красногорский муниципальный район',
            'Малопургинский муниципальный район',
            'Можгинский муниципальный район',
            'Сарапульский муниципальный район',
            'Селтинский муниципальный район',
            'Сюмсинский муниципальный район',
            'Увинский муниципальный район',
            'Шарканский муниципальный район',
            'Юкаменский муниципальный район',
            'Якшур',
            'Ярский муниципальный район',
            'Ижевск',
            'Воткинск',
            'Глазов',
            'Можга',
            'Сарапул',
        );
        $salaries = array(
            46471.6,
            33062.0,
            33877.5,
            42333.5,
            50306.9,
            37029.0,
            30890.5,
            36795.2,
            41432.4,
            47158.2,
            42217.4,
            40208.5,
            35158.4,
            34844.1,
            35237.5,
            31298.2,
            35683.6,
            38906.2,
            40888.6,
            34346.9,
            34944.5,
            41063.0,
            32495.3,
            32775.6,
            49972.3,
            34662.0,
            53821.4,
            41133.1,
            39087.9,
            35439.2,
            38162.4,
        );
        $cities = DB::table('cities')->count();
        for ($i = 0; $i < count($salaries); $i++) {
            Municipality::insert([
                'title' => $municipalities[$i],
                'salaries' => $salaries[$i],
                'id_cities' => rand(1, $cities),
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
        Schema::dropIfExists('municipalities');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Invalid;

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
            $table->integer('quantity');
        });

        $invalids_1 = array(
            239,
            296,
            160,
            130,
            208,
            84,
            92,
            507,
            320,
            196,
            205,
            182,
            97,
            100,
            106,
            246,
            268,
            100,
            254,
            329,
            160,
            111,
            142,
            246,
            880,
            1261,
            503,
            1535,
            842,
            1527,
            1044,
            1208,
            1141,
            5762,
        );
        $invalids_2 = array(
            587,
            763,
            447,
            370,
            563,
            226,
            308,
            1624,
            976,
            492,
            610,
            446,
            387,
            384,
            341,
            677,
            615,
            238,
            450,
            843,
            454,
            370,
            376,
            690,
            2066,
            3023,
            1170,
            3482,
            2719,
            3968,
            3565,
            3425,
            3271,
            16948,
        );
        $invalids_3 = array(
            665,
            915,
            644,
            498,
            563,
            258,
            353,
            1869,
            1019,
            669,
            777,
            532,
            405,
            558,
            443,
            700,
            866,
            350,
            395,
            1032,
            662,
            450,
            420,
            897,
            2741,
            2238,
            1345,
            4403,
            3030,
            3977,
            3517,
            3798,
            3691,
            18013,
        );
        $invalids_children = array(
            111,
            145,
            97,
            100,
            71,
            52,
            58,
            328,
            167,
            82,
            97,
            73,
            33,
            63,
            29,
            113,
            111,
            58,
            58,
            165,
            66,
            25,
            48,
            186,
            357,
            402,
            204,
            478,
            395,
            586,
            394,
            495,
            427,
            2297,
        );

        for ($i = 0; $i < count($invalids_1); $i++) {
            Invalid::insert([
                'id_cities' => rand(1, 30),
                'id_invalids_categories' => 1,
                'quantity' => $invalids_1[$i],
            ]);
            Invalid::insert([
                'id_cities' => rand(1, 30),
                'id_invalids_categories' => 2,
                'quantity' => $invalids_2[$i],
            ]);
            Invalid::insert([
                'id_cities' => rand(1, 30),
                'id_invalids_categories' => 3,
                'quantity' => $invalids_3[$i],
            ]);
            Invalid::insert([
                'id_cities' => rand(1, 30),
                'id_invalids_categories' => 4,
                'quantity' => $invalids_children[$i],
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
        Schema::dropIfExists('invalids');
    }
}

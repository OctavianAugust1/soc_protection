<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Unemployed;

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
            $table->unsignedBigInteger('id_cities');
            $table->foreign('id_cities')->references('id')->on('cities');
            $table->integer('quantity');
        });

        $cities = DB::table('cities')->pluck('id');
        $quantity = array(
            7657,
            421,
            168,
            631,
            154,
            656,
            409,
            953,
            299,
            258,
            325,
            165,
            100,
            101,
            679,
            270,
            290,
            149,
            222,
            311,
            120,
            94,
            365,
            121,
            148,
            184,
            256,
            194,
            117,
            200,
        );
        for ($i = 0; $i < count($quantity); $i++) {
            Unemployed::insert([
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
        Schema::dropIfExists('unemployeds');
    }
}

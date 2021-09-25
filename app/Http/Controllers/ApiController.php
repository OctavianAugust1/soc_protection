<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Invalid;
use App\Models\Population;
use App\Models\Unemployed;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get_population() {
        $populations = City::leftJoin('populations', 'cities.id', '=', 'populations.id_cities')->get();
        return response()->json([
            'populations' => $populations
        ], 200);
    }
    public function get_invalids_and_population() {
        $invalids_quantity = Invalid::sum('quantity');
        $population = Population::sum('quantity');
        return response()->json([
            'invalids_quantity' => $invalids_quantity,
            'population' => $population,
        ], 200);
    }
    public function get_unemployed_and_population() {
        $unemployed_quantity = Unemployed::sum('quantity');
        $population = Population::sum('quantity');
        return response()->json([
            'unemployed_quantity' => $unemployed_quantity,
            'population' => $population,
        ], 200);
    }
}

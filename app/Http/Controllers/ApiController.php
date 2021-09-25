<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get_population() {
        $populations = City::leftJoin('populations', 'cities.id', '=', 'populations.id_cities')->get();
        return response()->json([
            'populations' => $populations
        ], 200);
    }
}

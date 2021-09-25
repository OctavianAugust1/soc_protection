<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get_population() {
        $populations = City::get_populations_on_cities();
        return response()->json([
            'populations' => $populations
        ], 200);
    }
}

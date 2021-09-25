<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function service() {
        return view('pages.service');
    }
    public function total_amount_of_poverty() {
        $populations = City::leftJoin('populations', 'cities.id', '=', 'populations.id_cities')->get();
        return view('pages.total_amount_of_poverty', compact('populations'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\City;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function service() {
        $services = Service::pluck('title');
        return view('pages.service', compact('services'));
    }
    public function total_amount_of_poverty() {
        return view('pages.total_amount_of_poverty');
    }
    public function invalids_and_population() {
        return view('pages.invalids_and_population');
    }
    public function unemployed_and_population() {
        return view('pages.unemployed_and_population');
    }
}

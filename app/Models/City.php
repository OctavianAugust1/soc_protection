<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'title'
    ];

    public function get_populations_on_cities() {
        return City::leftJoin('populations', 'cities.id', '=', 'populations.id_cities')->get();
    }
}

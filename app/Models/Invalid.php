<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invalid extends Model
{
    protected $fillable = [
        'id_cities', 'id_invalids_categories', 'quantity',
    ];
}

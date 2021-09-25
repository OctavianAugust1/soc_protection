<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unemployed extends Model
{
    protected $fillable = [
        'id_cities', 'quantity',
    ];
}

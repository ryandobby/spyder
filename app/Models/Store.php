<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'store',
        'cbsa',
        'address',
        'city',
        'state',
        'zip_code',
        'latitude',
        'longitude',
        'current_check_in_area',
        'revcurrent_access_point_interior_solution',
        'ogp_market_name',
        'status',
    ];
}

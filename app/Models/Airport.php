<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable=[
        'id',
        'name',
        'city_id',
        'iata',
        'icao',
        'latitude',
        'longitude',
        'altitude',
        'timezone',
        'dst_id',
        'timezone_id',
        'type_id',
        'source_id'
    ];
}

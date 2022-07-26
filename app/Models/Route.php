<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable=[
        'airline_id',
        'source_airport_id',
        'destination_airport_id',
        'codeshare',
        'stops',
        'equipment_id',
        'price'
    ];
}

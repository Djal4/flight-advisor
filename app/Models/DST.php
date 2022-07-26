<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DST extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $table='dst';

    protected $fillable=[
        'title'
    ];
}

<?php

namespace App\Services;

use App\Models\Route;
use Illuminate\Support\Facades\DB;

class RouteFindService
{
    public int $graph;



    public function fillGraph()
    {
        $graph=[];
        $routes=Route::all();
        foreach($routes as $route){
            $graph[$route->source_airport_id][$route->destination_airport_id]=$route->price;
        }
        return response()->json($graph);
    }

}

?>
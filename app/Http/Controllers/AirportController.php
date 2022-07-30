<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;
use App\Services\FileReadService;
use App\Services\FileStoreService;
use App\Models\City;
use App\Models\DST;
use App\Models\Sources;
use App\Models\Timezones;
use App\Models\Types;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Airport::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=FileStoreService::store('airports/',$request->file('file'));

        $data=FileReadService::read($file);
        foreach($data as $row){
            $city=City::firstWhere('name',$row[2]);
            if($city){
                $dst=DST::firstOrCreate(['title'=>$row[10]]);
                $timezone=Timezones::firstOrCreate(['title'=>$row[11]]);
                $type=Types::firstOrCreate(['title'=>$row[12]]);
                $source=Sources::firstOrCreate(['title'=>$row[13]]);

                Airport::create([
                    'id'=>$row[0],
                    'name'=>$row[1],
                    'city_id'=>$city->id,
                    'iata'=>$row[4],
                    'icao'=>$row[5],
                    'latitude'=>$row[6],
                    'longitude'=>$row[7],
                    'altitude'=>$row[8],
                    'timezone'=>$row[9],
                    'dst_id'=>$dst->id,
                    'timezone_id'=>$timezone->id,
                    'type_id'=>$type->id,
                    'source_id'=>$source->id
                ]);
            }
        }
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Airport $airport)
    {
        return response()->json($airport);
    }
}

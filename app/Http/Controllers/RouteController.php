<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileFormRequest;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Equipment;
use App\Models\Route;
use App\Services\FileStoreService;
use App\Services\FileReadService;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny',Route::class);
        return response()->json(Route::all());
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
    public function store(FileFormRequest $request)
    {
        $this->authorize('create',Route::class);
        $file=FileStoreService::store('routes/',$request->file('file'));

        $data=FileReadService::read($file);

        $routes=[];

        foreach($data as $row){
            if(Airport::find($row[3]) && Airport::find($row[5])){
                $equipment=Equipment::firstOrCreate(['title'=>$row[8]]);
                $routes[]=Route::create([
                    'airline'=>$row[0],
                    'airline_id'=>$row[1],
                    'source_airport_id'=>$row[3],
                    'destination_airport_id'=>$row[5],
                    'codeshare'=>$row[6],
                    'stops'=>$row[7],
                    'equipment_id'=>$equipment->id,
                    'price'=>$row[9]
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($source,$destination)
    {
        $this->authorize('view',Route::class);
        return response()->json(
            DB::table('routes')
                ->join('equipment','routes.equipment_id','=','equipment.id')
                ->where('source_airport_id','=',$source)
                ->where('destination_airport_id','=',$destination)
                ->orderBy('price','asc')
                ->limit(1)
                ->get()
            );
    }
}

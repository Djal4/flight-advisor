<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($number=0)
    {
        $query=DB::table('comments')
            ->join('cities','comments.city_id','=','cities.id')
            ->join('users','comments.user_id','=','users.id')
            ->select('cities.name','cities.description','users.firstname','users.lastname','comments.comment');

        if($number!=0){
            $query=$query->limit($number);
        }
            
        return response()->json(
            $query->get()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            City::create([
                "name"=>$request->name,
                "country_id"=>$request->country_id,
                "description"=>$request->description
            ])
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name,$number=0)
    {
        $query=DB::table('comments')
            ->join('cities','comments.city_id','=','cities.id')
            ->join('users','comments.user_id','=','users.id')
            ->select('cities.name','cities.description','users.firstname','users.lastname','comments.comment')
            ->where('cities.name',$name);

        if($number!=0){
            $query=$query->limit($number);
                
        }

        return response()->json([
            $query->get()
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

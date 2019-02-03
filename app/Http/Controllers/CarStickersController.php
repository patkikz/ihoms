<?php

namespace App\Http\Controllers;

use App\CarSticker;
use App\Tenant;
use Illuminate\Http\Request;

class CarStickersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('car-stickers.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarSticker  $carSticker
     * @return \Illuminate\Http\Response
     */
    public function show(CarSticker $carSticker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarSticker  $carSticker
     * @return \Illuminate\Http\Response
     */
    public function edit(CarSticker $carSticker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarSticker  $carSticker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarSticker $carSticker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarSticker  $carSticker
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarSticker $carSticker)
    {
        //
    }
    
    public function autoComplete(Request $request)
    {
        $term = $request->term;
        $data = Tenant::selectRaw('id, CONCAT(first_name, " ", last_name) AS full_name,first_name,last_name, middle_name, block, lot, street')
                        ->where('withParking', '1')
                        // ->orWhere('last_name', 'LIKE', '%'.$term.'%')
                        // ->orWhere('first_name', 'LIKE', '%'.$term.'%')
                        ->get()->take(10);

        $results = array();
        
        foreach($data as $key => $v )
        {
            $results[] = ['id' => $v->id,
            'value' => $v->full_name,
            'first_name' => $v->first_name,
            'last_name' => $v->last_name,
            'middle_name' => $v->middle_name,
            'block' => $v->block,
            'lot' => $v->lot,
            'street' => $v->street
            ];  
        }

        return response()->json($results);
    }
}

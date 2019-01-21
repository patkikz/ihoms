<?php

namespace App\Http\Controllers;

use App\CarSticker;
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
}

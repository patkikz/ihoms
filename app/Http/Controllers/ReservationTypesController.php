<?php

namespace App\Http\Controllers;

use App\ReservationType;
use Illuminate\Http\Request;

class ReservationTypesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = ReservationType::all();

        return view('reservation-types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservation-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = request()->validate([
            'reservation_type' => 'required',
            'amount' => 'required'
        ]);

        ReservationType::create($request);

        return redirect('reservation-types')->withSuccess('Reservation Type Created Successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReservationType  $reservationType
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservationType $reservationType)
    {
        return view('reservation-types.edit', compact('reservationType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReservationType  $reservationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservationType $reservationType)
    {
        $reservationType->update(request()->validate([
            'reservation_type' => 'required',
            'amount' => 'required'
        ]));


        return redirect('reservation-types')->withSuccess('Reservation Type Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReservationType  $reservationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservationType $reservationType)
    {
        $reservationType->delete();

        return redirect('reservation-types')->withSuccess('Deleted Successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\ReservationType;
use App\ReservationTransaction;
use App\Transaction;
use App\Tenant;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Alert;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = ReservationType::pluck('reservation_type', 'id');
        return view('reservations.index', compact('types'));
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
        $request = request()->validate([
            'tenant_id' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'reserved_date' => 'required',
            'total_amount' => 'required',
            'tender' => 'required',
            'change' => 'required',
            'amount' => 'required',
            'reservation_type' => 'required',
        ]);

        $id = Reservation::create($request)->id;

        ReservationTransaction::create([
            'tenant_id' => $request['tenant_id'],
            'reservation_type' => $request['reservation_type'],
            'reservation_id' => $id,
            'amount' => $request['amount'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $cashier = auth()->id();

        Transaction::create([
            'transactionFor' => 'reservations',
            'amount' => $request['total_amount'],
            'tenant_id' => $request['tenant_id'],
            'cashier' => $cashier,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect('reservations')->withsSuccess('Reservation is added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }


    
    public function autocomplete(Request $request)
    {
        $term = $request->term;
        $data = Tenant::where('last_name', 'LIKE', '%'.$term.'%')
                        ->orWhere('first_name', 'LIKE', '%'.$term.'%')
                        ->selectRaw('id, CONCAT(first_name, " ", last_name) AS full_name,first_name,last_name, middle_name, block, lot, street')
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

    public function typeDetails($id)
    {

    $type = DB::table('reservation_types')->where('id', $id)->first();

    return ["type" => $type];
    }
}

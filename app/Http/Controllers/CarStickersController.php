<?php

namespace App\Http\Controllers;

use App\CarSticker;
use App\Tenant;
use App\VehicleType;
use App\Transaction;
use App\StickerTransaction;
use DB;
use Carbon\Carbon;

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
        if(Transaction::count() != 0)
        {
            $latest = Transaction::latest()->first()->id;
            
        }
        else
        {
            $latest = Transaction::latest()->first();
        }

        $types = VehicleType::pluck('vehicle_type', 'id');
        return view('car-stickers.index', compact('types', 'latest'));
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
        $data = $request->validate(
            [
                'tenant_id' => 'required',
                'date_from' => 'required',
                'date_to' => 'required',
                'vehicle_type.*' => 'required',
                'amount.*' => 'required',
                'plate_no.*' => 'required',
                'total_amount' => 'required',
                'tender' => 'required',
                'change' => 'required'
            ]);;

            $id = CarSticker::create($data)->id;

            if(count($request->vehicle_type) > 0)
            {
                foreach ($request->vehicle_type as $key => $value)
                {
                    $list = array(
                        'tenant_id' => $request->input('tenant_id'),
                        'sticker_id' => $id,
                        'vehicle_type' => $request->vehicle_type[$key],
                        'amount' => $request->amount[$key],
                        'plate_no' => $request->plate_no[$key],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    );
                   StickerTransaction::insert($list);
                }
            }

            $cashier = auth()->id();

            Transaction::create([
                'cashier' =>  $cashier,
                'transactionFor' => 'car-stickers',
                'tenant_id' => $request->input('tenant_id'),
                'amount' => $request->input('total_amount'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        
            return redirect('car-stickers')->withSuccess('Car Sticker Added!');
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

    public function typeDetails($id)
    {

    $type = DB::table('vehicle_types')->where('id', $id)->first();

    return ["type" => $type];

    
    }
}

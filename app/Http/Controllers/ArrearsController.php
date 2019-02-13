<?php

namespace App\Http\Controllers;

use App\Arrear;
use App\Tenant;
use App\Transaction;
use App\ArrearPayment;
use App\ArrearTransaction;
use DB;
use Alert;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ArrearsController extends Controller
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
        
        if(Transaction::count() != 0)
        {
            $latest = Transaction::latest()->first()->id;
            
        }
        else
        {
            $latest = Transaction::latest()->first();
        }

        $months = DB::table('months')->pluck('name','id');

        return view('arrears.index', compact('latest', 'months'));
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
                'month.*' => 'required',
                'amountToPay.*' => 'required',
                'actualAmountPaid.*' => 'required',
                'total_amount' => 'required',
                'tender' => 'required',
                'change' => 'required'
            ]);;
        
        $id = ArrearPayment::create($data)->id;
        if(count($request->month) > 0)
        {
            foreach ($request->month as $key => $value)
            {
                $list = array(
                    'tenant_id' => $request->input('tenant_id'),
                    'arrear_payment_id' => $id,
                    'month' => $request->month[$key],
                    'amountToPay' => $request->amountToPay[$key],
                    'actualAmountPaid' => $request->actualAmountPaid[$key],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                );
                ArrearTransaction::insert($list);
            }
        }

        $cashier = auth()->id();

            Transaction::create([
                'cashier' =>  $cashier,
                'transactionFor' => 'arrears',
                'tenant_id' => $request->input('tenant_id'),
                'amount' => $request->input('total_amount'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            // $x = $request->input('amountToPay.*');
            // $y = $request->input('actualAmountPaid.*');

            $tenant = $request->input('tenant_id');
            
            if(count($request->month) > 0)
            {
                foreach ($request->month as $key => $value)
                {
                    $x = $request->amountToPay[$key];

                    $y = $request->actualAmountPaid[$key];

                    $month = $request->month[$key];

                    $arrear = ((int)$x - (int)$y);
                    if($arrear == 0)
                    {
                        DB::table('arrears')
                        ->where(['tenant_id' => $tenant, 'month' => $month])
                        ->update(['arrear' => $arrear , 'hasPaid' => '1']);

                        DB::table('due_transactions')
                        ->where(['tenant_id' => $tenant, 'month' => $month])
                        ->increment('actualAmountPaid' , $y);
                    }
                    else
                    {
                        DB::table('arrears')
                        ->where(['tenant_id' => $tenant, 'month' => $month])
                        ->update(['arrear' => $arrear]);

                        DB::table('due_transactions')
                        ->where(['tenant_id' => $tenant, 'month' => $month])
                        ->increment('actualAmountPaid' , $y);
                    }
                    

                }
            }

            return redirect('/arrears')->withSuccess('Payment Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Arrear  $arrear
     * @return \Illuminate\Http\Response
     */
    public function show(Arrear $arrear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arrear  $arrear
     * @return \Illuminate\Http\Response
     */
    public function edit(Arrear $arrear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arrear  $arrear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arrear $arrear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Arrear  $arrear
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arrear $arrear)
    {
        //
    }

    public function autocomplete(Request $request)
    {
        $term = $request->term;
        $data = Tenant::selectRaw('id, CONCAT(first_name, " ", last_name) AS full_name,first_name,last_name, middle_name, block, lot, street')
                        ->whereHas('arrears', function($query){
                            $query->where('arrear' ,'!=', 0);
                        })
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

    public function arrearDetails($id)
    {

    $arrear = DB::table('arrears')->where(['tenant_id' =>$id, 'hasPaid' => '0'])    
    ->join('months' , 'months.id' , 'arrears.month')
    ->get()->take(12);


    return ["arrear" => $arrear];

    
    }

}

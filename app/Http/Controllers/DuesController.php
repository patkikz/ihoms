<?php

namespace App\Http\Controllers;

use App\Due;
use App\Tenant;
use App\DueTransaction;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon\Carbon;
use Alert;

class DuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Due $due)
    {
       
        $tenants = Tenant::all();
        $dues = Due::orderBy('created_at', 'desc')->paginate(4);
        return view('dues.index', compact('tenants', 'dues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
         if(Transaction::count() != 0)
        {
            $latest = Transaction::latest()->first()->id;
            
        }
        else
        {
            $latest = Transaction::latest()->first();
        }
        $transactions = DueTransaction::where('tenant_id', 'id')->get();
        $months = DB::table('months')->pluck('name','id');
        $tenants = Tenant::pluck('id', 'id');
        return view ('dues.create', compact('tenants', 'latest', 'transactions', 'months'));
       
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
                'last_name' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'month.*' => 'required',
                'amount.*' => 'required',
                'total_amount' => 'required',
                'tender' => 'required',
                'change' => 'required'
            ]);;
        
        $id = Due::create($data)->id;
            if(count($request->month) > 0)
            {
                foreach ($request->month as $key => $value)
                {
                    $list = array(
                        'tenant_id' => $request->input('tenant_id'),
                        'due_id' => $id,
                        'month' => $request->month[$key],
                        'amount' => $request->amount[$key],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    );
                    DueTransaction::insert($list);
                }
            }

            $id = auth()->id();

            Transaction::create([
                'cashier' =>  $id,
                'transactionFor' => 'dues',
                'tenant_id' => $request->input('tenant_id'),
                'amount' => $request->input('total_amount')
            ]);
            return redirect('/dues')->with('success','Payment Added For This User');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function show(Due $due)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function edit(Due $due)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Due $due)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function destroy(Due $due)
    {
        $due->delete();

        return redirect('/dues')->withSuccess('Payment Removed!');  
    }
    
    public function tenantDetails($id)
    {
    $tenant = DB::table('tenants')->where('id', $id)->first();

    return ["tenant" => $tenant];
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

    public function dueDetails($id)
    {

    $due = DB::table('due_transactions')->where('tenant_id', $id)
    ->join('months' , 'months.id' , 'due_transactions.month')
    ->get();


    return ["due" => $due];

    
    }

}

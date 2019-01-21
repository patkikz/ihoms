<?php

namespace App\Http\Controllers;

use App\Due;
use App\Tenant;
use Illuminate\Http\Request;

class DuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenants = Tenant::all();
        $dues = Due::all();

        return view('dues.index', compact('tenants', 'dues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tenants = Tenant::pluck('id', 'id');
        return view ('dues.create')->with('tenants', $tenants);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = request()->validate(
            [
                'tenant_id' => 'required',
                'transaction_date' => 'required',
                'last_name' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'amount' => 'required',
                'tender' => 'required',
                'change' => 'required',
            ]);

        Due::create($request);

        return redirect('/dues')->with('success', 'Payment Added');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function destroy(Due $due)
    {
        //
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Tenant;
use Illuminate\Http\Request;
use Alert;

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenants = Tenant::all();

        return view('tenants.index')->with('tenants', $tenants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Tenant::create($request->validate(
            [
                'last_name' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'birth_place' => 'required',
                'block' => 'required',
                'lot' => 'required',
                'street' => 'required',
            ]));

        // Tenant::create($validated);

        return redirect('/tenants');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(Tenant $tenant)
    {
        return view('tenants.show', compact('tenant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenant $tenant)
    {
        return view('tenants.edit', compact('tenant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,Tenant $tenant)
    {
        Tenant::updated($request->validate(
            [
                'last_name' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'birth_place' => 'required',
                'block' => 'required',
                'lot' => 'required',
                'street' => 'required',
            ]));

        return redirect('/tenants')->with('success','Tenant Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenant $tenant)
    {
        
        $tenant->delete();

        return redirect('/tenants')->with('success', 'Tenant Removed');
    }
}

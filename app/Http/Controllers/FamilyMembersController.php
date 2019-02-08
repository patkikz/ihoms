<?php

namespace App\Http\Controllers;

use App\FamilyMember;
use App\Tenant;
use Illuminate\Http\Request;

class FamilyMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->id() - 1;
        $familyMembers =  FamilyMember::where('tenant_id', $id)->get();

    

        return view('family-members.index', compact('familyMembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tenants = Tenant::pluck('last_name' , 'id');

        return view('family-members.create')->withTenants('tenants');
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
                'last_name' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'birth_date' => 'required',
                'relationship' => 'required',
            ]);
        FamilyMember::create($request);

        return redirect('/family-members')->with('success', 'Family Member Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FamilyMember  $familyMember
     * @return \Illuminate\Http\Response
     */
    public function show(FamilyMember $familyMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FamilyMember  $familyMember
     * @return \Illuminate\Http\Response
     */
    public function edit(FamilyMember $familyMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FamilyMember  $familyMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FamilyMember $familyMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FamilyMember  $familyMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(FamilyMember $familyMember)
    {
        //
    }
}

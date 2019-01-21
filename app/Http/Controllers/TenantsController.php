<?php

namespace App\Http\Controllers;

use App\Tenant;
use App\User;
use App\Relationship;
use App\FamilyMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Alert;
use DB;

class TenantsController extends Controller
{
    use RegistersUsers;
    use VerifiesEmails;

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
        
        $tenants = Tenant::where('owner_id', auth()->id())->get();

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
    
        $request = request()->validate(
            [
                'email' => 'required',
                'last_name' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'birth_date' => 'required',
                'birth_place' => 'required',
                'province' => 'required',
                'block' => 'required',
                'lot' => 'required',
                'street' => 'required',
                'payment_mode' => 'required',
                'withParking' => 'required',
            ]);
        
        $request['owner_id'] = auth()->id();
                
        
        $id = Tenant::create($request)->id;
        
    
        User::create([
            'tenant_id' => $id,
            'name' => $request['first_name'],
            'email' => $request['email'],
            'password' => Hash::make('P@ssw0rd'),
        ]);
    
        return redirect('/tenants')->with('success', 'Tenant Created Successfully');
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
        if(auth()->user()->id !== $tenant->owner_id)
        {
            return redirect('/tenants')->with('error', 'Unauthorized Page');    
        }

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
        $tenant->update(request()->validate(
            [
                'email' => 'required',
                'last_name' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'birth_date' => 'required',
                'birth_place' => 'required',
                'province' => 'required',
                'block' => 'required',
                'lot' => 'required',
                'street' => 'required',
                'payment_mode' => 'required',
                'withParking' => 'required',
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

    // public function familyMember(Tenant $tenant)
    // {
    //     $relationships = Relationship::pluck('relationship_name', 'id');
    //     return view('tenants.family-member', compact('tenant'))->withRelationships($relationships);
    // }

    // public function familyMemberStore(Request $request)
    // {
    //       $request = request()->validate(
    //         [    
    //             'last_name' => 'required',
    //             'first_name' => 'required',
    //             'middle_name' => 'required',
    //             'birth_date' => 'required',
    //             'relationship_id' => 'required'
    //         ]);


    //        dd(FamilyMember::create($request));

    //         return redirect('/tenants')->with('success', 'Family Member Added!');
    // }
}
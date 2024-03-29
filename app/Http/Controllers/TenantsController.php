<?php

namespace App\Http\Controllers;

use App\Tenant;
use App\User;
use App\Relationship;
use App\FamilyMember;
use App\Gender;
use App\CivilStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Storage;
use App\Events\UserCreated;
use Carbon\Carbon;
use Alert;
use DB;
use Input;

class TenantsController extends Controller
{
    use RegistersUsers;
    use VerifiesEmails;

    public function __construct()
    {
        $this->middleware(['auth', 'checkuserrole'],['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tenants = Tenant::where('owner_id', auth()->id())->orderBy('created_at', 'desc')->paginate(5);

        return view('tenants.index')->with('tenants', $tenants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = DB::table('cities')->orderBy('city_municipality_description', 'asc')->pluck('city_municipality_description', 'id');
        $provinces = DB::table('provinces')->orderBy('province_description', 'asc')->pluck('province_description', 'id');
        $genders = Gender::orderBy('id', 'asc')->pluck('gender','id');
        $civil_statuses = CivilStatus::orderBy('id', 'asc')->pluck('civil_status','id');
        return view('tenants.create', compact('cities', 'provinces','genders','civil_statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->hasFile('profile_image'))
        {
            //Get filename with extension

            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();

            //Get jusy file name

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension

            $extension = $request->file('profile_image')->getClientOriginalExtension();

            // Filename to 
            
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload

            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noprofile.jpg';
        }
    
        $request = request()->validate(
            [
                'email' => 'required',
                'profile_image' => '|image|nullable|max:1999',
                'last_name' => 'required',
                'first_name' => 'required',
                'middle_name' => 'required',
                'gender' => 'required',
                'civil_status' => 'required',
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
        $request['profile_image'] = $fileNameToStore;
                
        
        $id = Tenant::create($request)->id;
        
    
        $user = User::create([
            'tenant_id' => $id,
            'name' => $request['first_name'],
            'email' => $request['email'],
            'password' => Hash::make('P@ssw0rd'),
        ]);

        event(new UserCreated($user));  
    
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
        $cities = DB::table('cities')->orderBy('city_municipality_description', 'asc')->pluck('city_municipality_description', 'id');
        $provinces = DB::table('provinces')->orderBy('province_description', 'asc')->pluck('province_description', 'id');
        $genders = Gender::orderBy('id', 'asc')->pluck('gender','id');
        $civil_statuses = CivilStatus::orderBy('id', 'asc')->pluck('civil_status','id');
        if(auth()->user()->id !== $tenant->owner_id)
        {
            return redirect('/tenants')->with('error', 'Unauthorized Page');    
        }

        return view('tenants.edit', compact('tenant', 'cities', 'provinces','genders','civil_statuses'));
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
        if(auth()->user()->id !== $tenant->owner_id)
        {
            return redirect('/tenants')->with('error', 'Unauthorized Page');    
        }
        $tenant->delete();

        return redirect('/tenants')->with('success', 'Tenant Removed');
    }

    public function familyMember(Tenant $tenant)
    {
        $relationships = Relationship::pluck('relationship_name', 'id');
        return view('tenants.family-member', compact('tenant'))->withRelationships($relationships);
    }

    public function familyMemberStore(Request $request)
    {
        $data = $request->validate(
            [
                'last_name.*' => 'required',
                'first_name.*' => 'required',
                'middle_name.*' => 'required',
                'birth_date.*' => 'required',
                'birth_place.*' => 'required',
                'province.*' => 'required',
                'relationship_id.*' => 'required' 
            ]);

        foreach($request->last_name as $v => $item)
        {
            $datas = array(
                'tenant_id' => $request->input('tenant_id'),
                'last_name' => $request->last_name[$v],
                'first_name' => $request->first_name[$v],
                'middle_name' => $request->middle_name[$v],
                'birth_date' => $request->birth_date[$v],
                'birth_place' => $request->birth_place[$v],
                'province' => $request->province[$v],
                'relationship_id' => $request->relationship_id[$v],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            );
              FamilyMember::insert($datas);
        }
        return redirect('/tenants')->with('success', 'Family Member Added!'); 
    }

    public function autocompleteCities(Request $request)
    {
        $term = $request->term;
        $data = Tenant::where('city_municipality_description', 'LIKE', '%'.$term.'%')
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

    public function search(Request $request)
    {
        $search = $request->get('search');
        $tenants = DB::table('tenants')
                    ->where('last_name', '%'.$search.'%')
                    -orWhere('first_name', '%'.$search.'%')
                    ->get();

        return view('tenants.index', compact('tenants'));
    }
}

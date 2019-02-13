<?php

namespace App\Http\Controllers;

use App\Purpose;
use Illuminate\Http\Request;

class PurposesController extends Controller
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
        $purposes = Purpose::all();

        return view('purposes.index')->with('purposes', $purposes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purposes.create');
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
                'purpose_name' => 'required'
            ]);

        Purpose::create($request);

        return redirect('/purposes')->with('success', 'Purpose Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function show(Purpose $purpose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function edit(Purpose $purpose)
    {
        if(auth()->user()->id !== $purpose->user_id)
        {
            return redirect('/expenses')->with('error', 'Unauthorized Page');    
        }

        return view('purposes.edit', compact('purpose'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purpose $purpose)
    {
        $purpose->update(request()->validate(
            [
                'purpose_name' => 'required'
            ]));

        return redirect('/purposes')->with('success', 'Purpose Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purpose $purpose)
    {
        if(auth()->user()->id !== $purpose->user_id)
        {
            return redirect('/purposes')->with('error', 'Unauthorized Page');    
        }

        $purpose->delete();

        return redirect('/purposes')->with('success','Purpose Deleted');
    }
}

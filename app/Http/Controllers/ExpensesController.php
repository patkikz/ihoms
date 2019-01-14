<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Purpose;
use Illuminate\Http\Request;
use Alert;

class ExpensesController extends Controller
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
       
        $expenses = Expense::where('user_id', auth()->id())->get();

        return view('expenses.index')->with('expenses',$expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $purposes = Purpose::pluck('purpose_name', 'id');
        return view('expenses.create')->with('purposes', $purposes);
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
               'purpose' => 'required',
               'description' => 'required',
           ]
       );

       $request['user_id'] = auth()->id();

       Expense::create($request);

     

        return redirect('/expenses')->with('success', 'Expense Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        return view('expenses.show', compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense, Purpose $purpose)
    {
        $purpose = Purpose::pluck('purpose_name', 'id');
        
        if(auth()->user()->id !== $expense->user_id)
        {
            return redirect('/expenses')->with('error', 'Unauthorized Page');    
        }

        return view('expenses.edit', compact('expense'))->with('purpose', $purpose);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {

        $expense->update($request->validate(
            [
                'purpose' => 'required',
                'description' => 'required',
            ]
        ));
  
        return redirect('/expenses')->with('success','Expense Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        if(auth()->user()->id !== $expense->user_id)
        {
            return redirect('/expenses')->with('error', 'Unauthorized Page');    
        }

        $expense->delete();

        return redirect('/expenses')->with('success', 'Expenses Deleted');
    }

    
}

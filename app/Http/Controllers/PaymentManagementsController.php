<?php

namespace App\Http\Controllers;

use App\PaymentManagement;
use Illuminate\Http\Request;

class PaymentManagementsController extends Controller
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
        $paymentManagements = PaymentManagement::all();

        return view('payment-managements.index', compact('paymentManagements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment-managements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = request()->validate([
            'payment_for' => 'required',
            'amount' => 'required'
        ]);

        PaymentManagement::create($request);

        return redirect('/payment-managements')->withSuccess('New Payment Added!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentManagement  $paymentManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentManagement $paymentManagement)
    {
        return view('payment-managements.edit', compact('paymentManagement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentManagement  $paymentManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentManagement $paymentManagement)
    {
        $paymentManagement->update(request()->validate([
            'payment_for' => 'required',
            'amount' => 'required'
        ]));

        return redirect('payment-managements')->withSuccess('Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentManagement  $paymentManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentManagement $paymentManagement)
    {
        $paymentManagement->delete();

        return redirect('payment-managements')->withSuccess('Deleted Successfully!');
    }
}

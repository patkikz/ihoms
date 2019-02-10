@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h3>Transaction History</h3>
                    <hr>
                    <div class="row my-3">
                        <div class="col-xl-6 col-lg-6">
                            <div class="card rounded-0">
                                <div class="card-header">
                                    Due Transactions
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <th>Month</th>
                                        <th>Amount Paid</th>
                                        <th>Status</th>
                                            @if (count($dues) > 0)
                                                @foreach ($dues as $d)                               
                                            <tr>
                                                <td>{{$d->months->name}}</td>
                                                <td> {{$d->actualAmountPaid}}</td>
                                                <td>
                                                    @if ($d->actualAmountPaid != $d->amountToPay)
                                                        With Balance
                                                    @else
                                                        Fully Paid
                                                    @endif
                                                </td>
                                            </tr>
                                        
                                                @endforeach
                                            @else
                                                <em>No Due Transactions yet!</em>
                                            @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="card rounded-0">
                                <div class="card-header">
                                    Arrears Transactions
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <th>Month</th>
                                        <th>Amount Paid</th>
                                        <th>Status</th>
                                        @if (count($arrears) > 0)
                                            @foreach ($arrears as $a)
                                                <tr>
                                                    <td>{{$a->months->name}}</td>
                                                    <td>{{$a->actualAmountPaid}}</td>
                                                    <td>
                                                        @if ($a->actualAmountPaid != $a->amountToPay)
                                                            Not Paid
                                                        @else
                                                            Fully Paid
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <em>No Arrear Transactions yet!</em>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


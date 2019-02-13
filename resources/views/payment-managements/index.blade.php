@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">


                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Payments and Amounts</h3>
                        </div>
                        <div class="card-body">
                            <a href="/payment-managements/create" class="btn btn-primary float-right my-3 rounded-0">Add New Payment</a>
                            @if(count($paymentManagements) > 0)
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <th>Date Created</th>
                                        <th>Payment For</th>
                                        <th>Amount</th>
                                        <th colspan="2">Action</th>
                                        
                                    </tr>
                                    @foreach ($paymentManagements as $p)
                                        <tr>
                                        <td>{{$p->created_at->format('M d Y')}}</td>
                                        <td>{{$p->payment_for}}</td>
                                        <td>{{$p->amount}}</td>
                                        <td><a href="/payment-managements/{{$p->id}}/edit" class="btn btn-dark btn-sm rounded-0">Edit</a></td>
                                        <td>
                                                {!!Form::open(['action' => ['PaymentManagementsController@destroy', $p->id], 
                                                'method' => 'POST'
                                            ])!!}
                                    
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm rounded-0'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            @else
                                <em>There are no existing payments management! Create one now!</em>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
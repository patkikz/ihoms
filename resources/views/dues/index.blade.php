@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    @include('inc.search')
                </div>

                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Monthly Dues</h3>
                        </div>
                        <div class="card-body">
                            <a href="/dues/create" class="btn btn-primary rounded-0 float-right my-3">Add Payment</a>
                            @if(count($dues) > 0)
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <th>H.O ID</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Transaction Date</th>
                                        <th>Status</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                    @foreach ($dues as $due)
                                        <tr>
                                        <td>{{$due->tenant_id}}</td>
                                        <td>{{$due->last_name}}</td>
                                        <td>{{$due->first_name}}</td>
                                        <td>{{$due->middle_name}}</td>
                                        <td>{{$due->created_at->format('F d, Y')}}</td>
                                        <td>
                                        @if ($due->total_amount != null)
                                            <?php echo 'Paid';?>
                                        @else
                                                <?php echo 'Unpaid';?>
                                        @endif
                                        
                                        </td>
                                        <td><a href="/dues/{{$due->id}}/edit" class="btn btn-dark btn-sm">Edit</a></td>
                                        <td>
                                                {!!Form::open(['action' => ['DuesController@destroy', $due->id], 
                                                'method' => 'POST'
                                            ])!!}
                                    
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            @else
                                <em>There are no existing payments!</em>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{$dues->links()}}
{{-- <div class="container">
@if($forReceipt)
Receipt
    Amount:{{$forReceipt->amount}}
    Tender:{{$forReceipt->tender}}
    Change:{{$forReceipt->tender - $forReceipt->amount}}
    Tax: {{$forReceipt->amount * 0.02}}

    Total : {{$forReceipt - ($forReceipt->amount * 0.02)}}
</div>
@endif --}}
@endsection
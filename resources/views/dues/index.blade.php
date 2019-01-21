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
                    <div class="au-card au-card-padding rounded border-0">
                            <div class="">
                                    <a href="/dues/create" class="btn btn-primary float-right">Add Payment</a>
                            </div>
            
        
                        <div class="">
                            {{-- @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif --}}
                        
                        <h3>Monthly Dues</h3>
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
                                    <td>{{$due->transaction_date->format('M d Y')}}</td>
                                    <td>
                                       @if ($due->amount != null)
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
            </div>
        </div>
    </div>
</div>
@endsection
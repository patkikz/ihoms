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
                            <h3>Vehicle Types</h3>
                        </div>
                        <div class="card-body">
                            <a href="/vehicle-types/create" class="btn btn-primary float-right my-3 rounded-0">Add Vehicle Type</a>
                            @if(count($types) > 0)
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <th>Date Created</th>
                                        <th>Reservation Type</th>
                                        <th>Amount</th>
                                        <th colspan="2">Action</th>
                                        
                                    </tr>
                                    @foreach ($types as $tt)
                                        <tr>
                                        <td>{{$tt->created_at->format('F d Y')}}</td>
                                        <td>{{$tt->vehicle_type}}</td>
                                        <td>{{$tt->amount}}</td>
                                        <td><a href="/vehicle-types/{{$tt->id}}/edit" class="btn btn-dark btn-sm rounded-0">Edit</a></td>
                                        <td>
                                                {!!Form::open(['action' => ['VehicleTypesController@destroy', $tt->id], 
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
                                <em>There are no existing vehicle types! Create one now!</em>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
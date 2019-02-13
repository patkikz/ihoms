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
                            <div class="card-header">
                                @include('inc.back')
                            </div>
                            <div class="card-body">
                                {!! Form::open(['action' => ['ReservationTypesController@update', $reservationType->id], 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}
                                    {{method_field('PATCH')}}
                                    <div class="form-group">
                                        <h6>{!!Form::label('reservation_type', 'Reservation Type')!!}</h6>
                                        {!!Form::text('reservation_type', $reservationType->reservation_type, ['placeholder' => 'Reservation Type', 'class' => 'form-control input-label rounded-0'])!!}
                                    </div>

                                    <div class="form-group">
                                        <h6>{!!Form::label('amount', 'Amount')!!}</h6>
                                        {!!Form::number('amount', $reservationType->amount, ['placeholder' => 'Amount', 'class' => 'form-control input-label rounded-0'])!!}
                                    </div>
                                   
        
                                    {{Form::submit('Update', ['class' => 'btn btn-primary primary-bg rounded-0'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
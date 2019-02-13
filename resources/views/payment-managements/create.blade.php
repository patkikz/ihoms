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
                                @include('inc.back')
                            </div>
                            <div class="card-body">
                                {!! Form::open(['action' => 'PaymentManagementsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}

                                    <div class="form-group">
                                        <h6>{!!Form::label('payment_for', 'Payment For')!!}</h6>
                                        {!!Form::text('payment_for', '', ['placeholder' => 'Payment For', 'class' => 'form-control input-label rounded-0'])!!}
                                    </div>

                                    <div class="form-group">
                                        <h6>{!!Form::label('amount', 'Amount')!!}</h6>
                                        {!!Form::number('amount', '', ['placeholder' => 'Amount', 'class' => 'form-control input-label rounded-0'])!!}
                                    </div>
                                
                                    {{Form::submit('Submit', ['class' => 'btn btn-primary primary-bg rounded-0'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
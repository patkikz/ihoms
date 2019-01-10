@extends('layouts.app')

@section('content')
    Create Something
    {!! Form::open(['action' => 'TenantsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'box']) !!}
            
    <div class="form-group">
        {{Form::label('last_name', 'Last Name')}}
        {{Form::text('last_name', '', ['class' => ($errors->has('last_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Last Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('first_name', 'First Name')}}
        {{Form::text('first_name', '', ['class' => ($errors->has('first_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'First Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('middle_name', 'Middle Name')}}
        {{Form::text('middle_name', '', ['class' => ($errors->has('middle_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Middle Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('birth_place', 'Birthplace')}}
        {{Form::text('birth_place', '', ['class' => ($errors->has('birth_place')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Birth Place'])}}
    </div>
    
    <div class="form-group">
        {{Form::label('block', 'Block')}}
        {{Form::text('block', '', ['class' => ($errors->has('block')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Block'])}}
    </div>

    <div class="form-group">
        {{Form::label('lot', 'Lot')}}
        {{Form::text('lot', '', ['class' => ($errors->has('lot')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Lot'])}}
    </div>

    <div class="form-group">
        {{Form::label('street', 'Street')}}
        {{Form::text('street', '', ['class' => ($errors->has('street')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Street'])}}
    </div>


    {{Form::submit('Submit', ['class' => 'btn btn-outline-success'])}}
{!! Form::close() !!}
@endsection
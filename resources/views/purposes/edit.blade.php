@extends('layouts.app')

@section('content')
{!! Form::open(['action' => ['PurposesController@update', $purpose->id], 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}
    {{method_field('PATCH')}}
    <div class="form-group">
        {!!Form::label('purpose_name', 'Purpose')!!}
        {!!Form::text('purpose_name', $purpose->purpose_name, ['placeholder' => 'Purpose Name', 'class' => 'form-control form-control-sm'])!!}
    </div>
   

    {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}
@endsection
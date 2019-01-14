@extends('layouts.app')

@section('content')
{!! Form::open(['action' => 'PurposesController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}

    <div class="form-group">
        {!!Form::label('purpose_name', 'Purpose')!!}
        {!!Form::text('purpose_name', '', ['placeholder' => 'Purpose Name', 'class' => 'form-control form-control-sm'])!!}
    </div>
   

    {{Form::submit('Submit', ['class' => 'btn btn-outline-success'])}}
{!! Form::close() !!}
@endsection
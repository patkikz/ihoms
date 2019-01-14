@extends('layouts.app')

@section('content')
{!! Form::open(['action' => 'ExpensesController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}

    <div class="form-group">
        {!!Form::label('purpose', 'Purpose')!!}
        {!!Form::select('purpose', $purposes, null , ['placeholder' => 'Please pick one', 'class' => 'form-control form-control-sm'])!!}
    </div>
   
    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => ($errors->has('description')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Content'])}}
    </div>


    {{Form::submit('Submit', ['class' => 'btn btn-outline-success'])}}
{!! Form::close() !!}
@endsection
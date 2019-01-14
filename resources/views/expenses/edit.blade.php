@extends('layouts.app')

@section('content')
{!! Form::open(['action' => ['ExpensesController@update', $expense->id], 'method' => 'POST'])!!}
    {{method_field('PATCH')}}

    <div class="form-group">
        {!!Form::label('purpose', 'Purpose')!!}
        {!!Form::select('purpose',$purpose, $expense->purpose, ['placeholder' => 'Please pick one', 'class' => 'form-control form-control-sm'])!!}
    </div>
   
    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $expense->description, ['id' => 'article-ckeditor', 'class' => ($errors->has('description')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Content'])}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-outline-success'])}}
    {!! Form::close() !!}
@endsection
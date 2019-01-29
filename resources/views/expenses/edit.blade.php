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
                                
                                    {{Form::submit('Update', ['class' => 'btn btn-primary rounded-0 primary-bg'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
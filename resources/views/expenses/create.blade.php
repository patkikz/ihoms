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
                                {!! Form::open(['action' => 'ExpensesController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}

                                    <div class="form-group">
                                        <h6>{!!Form::label('purpose', 'Purpose')!!}</h6>
                                        {!!Form::select('purpose', $purposes, null , ['placeholder' => 'Please pick one', 'class' => 'form-control rounded-0 input-label'])!!}
                                    </div>
                                   
                                    <div class="form-group">
                                        <h6>{{Form::label('description', 'Description')}}</h6>
                                        {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => ($errors->has('description')) ? 'form-control form-control-sm is-invalid' : 'form-control rounded-0 form-control-sm', 'placeholder' => 'Content'])}}
                                    </div>
                                
                                
                                    {{Form::submit('POST', ['class' => 'btn btn-primary rounded-0 primary-bg'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
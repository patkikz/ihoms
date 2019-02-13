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
                                {!! Form::open(['action' => 'RelationshipsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}

                                <div class="form-group">
                                    <h6>{!!Form::label('relationship_name', 'Relationship Name')!!}</h6>
                                    {!!Form::text('relationship_name', '', ['placeholder' => 'Relationship Name', 'class' => 'form-control input-label rounded-0'])!!}
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
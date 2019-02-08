@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <h1>My Family Members</h1>
                    <div class="row my-3">
                        @if(count($familyMembers) > 0)
                            @foreach ($familyMembers as $f)
                            <div class="col-md-5">
                                <div class="card" style="width:400px">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$f->first_name}} {{$f->last_name}}</h4>
                                        <hr>
                                        <p class="card-text">{!!$f->birth_date->format('F d, Y')!!}</p>
                                        <p class="card-text">{{$f->birth_place}}</p>
                                        <p class="card-text">{{$f->province}}</p>
                                        <p class="card-text">{{$f->relationships->relationship_name}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                        @else
                        <em>No Family Members Yet!</em>   
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


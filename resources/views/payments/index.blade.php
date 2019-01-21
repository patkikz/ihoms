@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">

                    <header class="mb-2 row justify-center">
                        <div class="col-3 col-sm-2 col-md-6 col-lg-6 col-xl-6" >
                            <div class="float-left text-center text-md-left input-group">
                                <a href="#menu-toggle" class="btn btn-primary rounded-0 primary-bg" id="menu-toggle"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>

                        <div class="col-9 col-sm-10 col-md-6 col-lg-6 col-xl-6" >
                            <div class="float-left text-center text-md-left input-group">
                                <input id="btn-input" type="text" class="form-control input-md rounded-0" placeholder="Search" />
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-md border-left-0 primary-bg rounded-0"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </header>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card rounded-0 border-0">
                                <div class="card-header pb-0">
                                    <h4>PAYMENT MANAGEMENT</h4>
                                </div>
                                <div class="card-body">
                                    @include('inc.dues')
                                    @include('inc.cars')
                                    @include('inc.reservations') 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
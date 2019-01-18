@extends('layouts.app')

@section('content')

<div id="wrapper">

@include('inc.sidebar')
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                @include('inc.search')

                <div class="general-title">
                    <h3><i class="fa fa-desktop"></i> <span>HO MASTER FILE</span></h3>
                    <hr>
                </div>

                <div class="au-card au-card-padding rounded border-0">
                    {!! Form::open(['action' => 'TenantsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
                            
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
                
                
                    {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                    {!! Form::close() !!}
                </div>

                <div class="au-card au-card-padding rounded border-0">
                    <form>
                        <div class="form-row mx-auto">
                            
                            <div class="col-12 col-md-12 col-lg-10 col-xl-10">
                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <label for="ihoms-id" class="mt-2">H.O ID</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                                            <input id="ihoms-id" class="form-control" type="text" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <label class="mt-2">Full Name</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <input id="f-name" class="form-control mb-2" type="text" placeholder="First Name" />
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <input id="m-name" class="form-control mb-2" type="text" placeholder="Middle Name" />
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <input id="l-name" class="form-control mb-2" type="text" placeholder="Last Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <label class="mt-2">Birthday</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <input id="birth-date" class="form-control mb-2" type="date" />
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <input id="birth-place" class="form-control mb-2" type="text" placeholder="Birth Place" />
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <input id="province-place" class="form-control mb-2" type="text" placeholder="Province" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <label class="mt-2">Address</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <input id="ihoms-blk" class="form-control mb-2" type="text" placeholder="Blk" />
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <input id="ihoms-lot" class="form-control mb-2" type="text" placeholder="Lot" />
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <input id="ihoms-street" class="form-control mb-2" type="text" placeholder="Street" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-12 col-lg-2 col-xl-2 mb-2">
                                <div id="upload" class="position-relative">
                                    <div class="dashed_upload">
                                        <div class="wrapper">
                                            <div class="drop">
                                                <div class="padd">
                                                    <i class="fa fa-user"></i>
                                                    <div class="drag-drop">
                                                        Drag & Drop
                                                    </div>
                                                    <div class="text-seconday-grey">or</div>
                                                    <div class="btn btn-info rounded upload">
                                                        UPLOAD
                                                    </div>
                                                </div>
                                                <output id="list"></output><input id="upload" multiple name="files[]" type="file" />
                                                </div>
                                            </div>
                                        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row mx-auto">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                    <input id="mortage-id" class="" type="radio" name="rent" />
                                    <label class="mt-2">Mortcage</label>
                                    <br />
                                    <input id="fp-id" class="" type="radio" name="rent" />
                                    <label class="mt-2">Fully Paid</label>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                    <div class="">
                                    <select class="form-control form-control-lg">
                                        <option>Developer</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <input id="on-parking" class="" type="radio" name="rent" />
                                    <label class="mt-2">With Parking</label>
                                    <br />
                                    <input id="off-parking" class="" type="radio" name="rent" />
                                    <label class="mt-2">Without Parking</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mx-auto">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                <button id="btn-save" type="button" class="btn btn-info btn-block mb-2">Save</button>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                <button id="btn-add" type="button" class="btn btn-info btn-block mb-2">Add Family</button>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                <button id="btn-new" type="button" class="btn btn-info btn-block mb-2">New</button>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                <button id="btn-del" type="button" class="btn btn-info btn-block mb-2">Delete</button>
                            </div>
                        </div>
                        <div class="form-row mx-auto">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                <button id="btn-find" type="button" class="btn btn-info btn-block mb-2">Find</button>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                <button id="btn-proc" type="button" class="btn btn-info btn-block mb-2">Process</button>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                <button id="btn-expt" type="button" class="btn btn-info btn-block mb-2">Export To PDF</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    

</div>
@endsection
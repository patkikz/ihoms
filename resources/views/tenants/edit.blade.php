@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-4 col-lg-4">
                    <div class="card rounded-0 mb-3">
                        <div class="card-body p-0 mb-0">
                            <div id="upload" class="mb-3 position-relative">
                                <div class="dashed_upload">
                                    <div class="wrapper">
                                        <div class="drop">
                                        <div class="cont">
                                            <i class="fa fa-cloud-upload"></i>
                                            <div class="tit">
                                            Drag & Drop
                                            </div>
                                            <div class="desc">
                                            or 
                                            </div>
                                            <div class="browse primary-bg rounded-0">
                                            click here to browse
                                            </div>
                                        </div>
                                        <output id="list"></output><input id="files" multiple name="files[]" type="file" />
                                        </div>
                                    </div>
                                    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            
                                    <script src="js/index.js"></script>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8">
                    <div class="card rounded-0">
                        <div class="card-header">
                            Edit
                        </div>
                        <div class="card-body">
                                {!! Form::open(['action' => ['TenantsController@update', $tenant->id], 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'box']) !!}
                                {{method_field('PATCH')}}
                                <div class="form-row mx-auto">
                                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="form-group">
                                            <div class="form-row mx-auto">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <label for="email" class="primary-color">Email</label>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    {{Form::email('email', $tenant->email, ['class' => ($errors->has('email')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Email'])}}
                                                </div>
                                            </div>
                                        </div>
                            
                                        <div class="form-group">
                                            <div class="form-row mx-auto">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <label class="primary-color">Full Name</label>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                        {{Form::text('last_name', $tenant->last_name, ['class' => ($errors->has('last_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Last Name'])}}
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                        {{Form::text('first_name', $tenant->first_name, ['class' => ($errors->has('first_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'First Name'])}}
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                        {{Form::text('middle_name', $tenant->middle_name, ['class' => ($errors->has('middle_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Middle Name'])}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-row mx-auto">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label class="primary-color">Gender</label>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <label class="primary-color">Civil Status</label>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <input class="form-control input-label rounded-0" type="text" placeholder="Gender" />
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <input class="form-control input-label rounded-0" type="text" placeholder="Civil Status" />
                                                </div>
                                            </div>
                                        </div>
                            
                                        <div class="form-group">
                                            <div class="form-row mx-auto">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <label class="primary-color">Birthday</label>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                    {{Form::date('birth_date', $tenant->birth_date, ['class' => ($errors->has('birth_date')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Birth Date'])}}
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                    {{Form::select('birth_place', $cities, $tenant->birth_place, ['class' => ($errors->has('birth_place')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Birth Place'])}}
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                    {{Form::select('province', $provinces, $tenant->province ,['class' => ($errors->has('province')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Province'])}}
                                                </div>
                                            </div>
                                        </div>
                            
                                        <div class="form-group">
                                            <div class="form-row mx-auto">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <label class="primary-color">Address</label>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                    {{Form::text('block', $tenant->block, ['class' => ($errors->has('block')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Block'])}}
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                    {{Form::text('lot', $tenant->lot, ['class' => ($errors->has('lot')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Lot'])}}     
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                    {{Form::text('street', $tenant->street, ['class' => ($errors->has('street')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Street'])}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            {{ Form::radio('payment_mode', $tenant->payment_mode) }}
                                            <label class="mt-2">Mortgage</label>
                                            <br />
                                            {{ Form::radio('payment_mode', $tenant->payment_mode) }}
                                            <label class="mt-2">Fully Paid</label>
                                        </div>
                                        {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <div class="">
                                            <select class="form-control form-control-lg">
                                                <option>Developer</option>
                                            </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                            {{ Form::radio('withParking', $tenant->withParking) }}
                                            <label class="mt-2">With Parking</label>
                                            <br />
                                            {{ Form::radio('withParking', $tenant->withParking) }}
                                            <label class="mt-2">Without Parking</label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                
                                
                                <div class="form-row mx-auto">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            {{Form::submit('Save', ['class' => 'btn btn-primary primary-bg rounded-0'])}}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
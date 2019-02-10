@extends('layouts.app')

@section('content')

<div id="wrapper">

@include('inc.sidebar')
{!! Form::open(['action' => 'TenantsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
<div id="page-content-wrapper">
    <div class="container-fluid">
        {{-- @include('inc.search') --}}
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
                                    <output id="list"></output>
                                    {{Form::file('profile_image', ['id' => 'file'])}}
                                    
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
                        ADD HOMEOWNERS
                    </div>

                    <div class="card-body">
                           
                        
                            <div class="form-row mx-auto">
                                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="form-group">
                                        <div class="form-row mx-auto">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <label class="primary-color" for="email">Email</label>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                {{Form::email('email', '', ['class' => ($errors->has('email')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Enter your email'])}}
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <div class="form-row mx-auto">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <label class="primary-color">Full Name</label>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                    {{Form::text('last_name', '', ['class' => ($errors->has('last_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Last Name'])}}
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                    {{Form::text('first_name', '', ['class' => ($errors->has('first_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'First Name'])}}
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                    {{Form::text('middle_name', '', ['class' => ($errors->has('middle_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Middle Initial'])}}
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
                                                {{Form::select('gender', $genders ,null ,['placeholder' => 'Gender', 'class' => 'form-control input-label rounded-0'])}}
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                {{Form::select('civil_status', $civil_statuses ,null ,['placeholder' => 'Civil Status', 'class' => 'form-control input-label rounded-0'])}}
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <div class="form-row mx-auto">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <label class="primary-color">Birthday</label>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                {{Form::date('birth_date', \Carbon\Carbon::now(), ['class' => ($errors->has('birth_date')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Birth Date'])}}
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                {{Form::select('birth_place', $cities, null, ['class' => ($errors->has('birth_place')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Birth Place'])}}
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <div class="form-row mx-auto">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <label class="primary-color">Address</label>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                {{Form::text('block', '', ['class' => ($errors->has('block')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Block'])}}
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                {{Form::text('lot', '', ['class' => ($errors->has('lot')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Lot'])}}     
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                {{Form::text('street', '', ['class' => ($errors->has('street')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Street'])}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row mx-auto">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <label class="primary-color">Province</label>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                {{Form::select('province', $provinces, null, ['class' => ($errors->has('province')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Province'])}}
                                            </div>
                                        </div>
                                    </div>

                                </div>   
                            </div>
                            <div class="form-group">
                                <div class="form-row mx-auto">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                        {{ Form::radio('payment_mode', 1) }}
                                        <label class="mt-2">Mortgage</label>
                                        <br />
                                        {{ Form::radio('payment_mode', 0) }}
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
                                        {{ Form::radio('withParking', 1) }}
                                        <label class="mt-2">With Parking</label>
                                        <br />
                                        {{ Form::radio('withParking', 0) }}
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
                            
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
{!! Form::close() !!}
</div>
@endsection
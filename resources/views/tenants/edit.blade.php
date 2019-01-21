@extends('layouts.app')

@section('content')
  
    {!! Form::open(['action' => ['TenantsController@update', $tenant->id], 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'box']) !!}
    {{method_field('PATCH')}}
    <div class="form-row mx-auto">
        <div class="col-12 col-md-12 col-lg-10 col-xl-10">
            <div class="form-group">
                <div class="form-row mx-auto">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                        <label for="email" class="mt-2">Email</label>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                        {{Form::email('email', $tenant->email, ['class' => ($errors->has('email')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Email'])}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row mx-auto">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                        <label class="mt-2">Full Name</label>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            {{Form::text('last_name', $tenant->last_name, ['class' => ($errors->has('last_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Last Name'])}}
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            {{Form::text('first_name', $tenant->first_name, ['class' => ($errors->has('first_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'First Name'])}}
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                            {{Form::text('middle_name', $tenant->middle_name, ['class' => ($errors->has('middle_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Middle Name'])}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row mx-auto">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                        <label class="mt-2">Birthday</label>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                        {{Form::date('birth_date', $tenant->birth_date, ['class' => ($errors->has('birth_date')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Birth Date'])}}
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                        {{Form::text('birth_place', $tenant->birth_place, ['class' => ($errors->has('birth_place')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Birth Place'])}}
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                        {{Form::text('province', $tenant->province, ['class' => ($errors->has('province')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Province'])}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row mx-auto">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                        <label class="mt-2">Address</label>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                        {{Form::text('block', $tenant->block, ['class' => ($errors->has('block')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Block'])}}
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                        {{Form::text('lot', $tenant->lot, ['class' => ($errors->has('lot')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Lot'])}}     
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                        {{Form::text('street', $tenant->street, ['class' => ($errors->has('street')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Street'])}}
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <div class="col-12 col-md-12 col-lg-2 col-xl-2 mb-2">
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
        </div> --}}
    </div>
    <div class="form-group">
        <div class="form-row mx-auto">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                {{ Form::radio('payment_mode', 1) }}
                <label class="mt-2">Mortcage</label>
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
{!! Form::close() !!}
@endsection
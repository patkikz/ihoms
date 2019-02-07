@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                {{-- <div class="col-xl-12 col-lg-12">
                    @include('inc.search')
                </div> --}}

                <div class="col-xl-8 col-lg-8 offset-lg-2">
                    <div class="card rounded-0">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <div class="mt-2">{{$tenant->first_name}}'s Family Member</div>
                                <button id="add" class="btn btn-primary rounded-0 primary-bg">Add Field</button>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['action' => ['TenantsController@familyMemberStore', $tenant->id], 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}
                                {{Form::hidden('tenant_id', $tenant->id)}}
                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <label class="primary-color">Full Name</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                {{Form::text('last_name[]', '', ['class' => ($errors->has('last_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Last Name'])}}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                {{Form::text('first_name[]', '', ['class' => ($errors->has('first_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'First Name'])}}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                {{Form::text('middle_name[]', '', ['class' => ($errors->has('middle_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Middle Name'])}}
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <label class="primary-color">Birthday</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            {{Form::date('birth_date[]', \Carbon\Carbon::now(), ['class' => ($errors->has('birth_date')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Birth Date'])}}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            {{Form::text('birth_place[]', '', ['class' => ($errors->has('birth_place')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Birth Place'])}}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <label class="primary-color">Province</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            {{Form::text('province[]', '', ['class' => ($errors->has('province')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Province'])}}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            {!!Form::label('relationship_id', 'Relationship', ['class' => 'primary-color'])!!}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            {!!Form::select('relationship_id[]', $relationships, null , ['placeholder' => 'Please pick one', 'class' => 'form-control input-label rounded-0'])!!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="" id="appendHere"></div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            {{Form::submit('ADD', ['class' => 'btn btn-primary primary-bg rounded-0'])}}
                                        </div>
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

@section('scripts')


    <script type="text/javascript">
    $(document).ready(function(){
    var count = 1;
    $('#add').click(function(){
        count = count + 1;
            var html_code = '<div id="row'+count+'">';
             html_code += '<div class="d-flex justify-content-between">';
             html_code += '<button type="button" name="remove" data-row="row'+count+'" href="#" class="btn btn-danger rounded-0 float-right remove">x</button>';
             html_code += '</div>';
             html_code += '<div class="form-group">';
             html_code += '<div class="form-row mx-auto">';
             html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">';
             html_code += '<label class="primary-color">Full Name</label>';
             html_code += '</div>';
             html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">';
             html_code += '{{Form::text('last_name[]', '', ['class' => ($errors->has('last_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Last Name'])}}';
             html_code += '</div>';
             html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">';
             html_code += '{{Form::text('first_name[]', '', ['class' => ($errors->has('first_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'First Name'])}}';
             html_code += '</div>';
             html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">';
             html_code += '{{Form::text('middle_name[]', '', ['class' => ($errors->has('middle_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Middle Name'])}}';
             html_code += '</div>';
             html_code += '</div>';
             html_code += '</div>';
             
            html_code += '<div class="form-group">';
            html_code += '<div class="form-row mx-auto">';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">';
            html_code += '<label class="primary-color">Birthday</label>';
            html_code += '</div>';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">';
            html_code += '{{Form::date('birth_date[]', \Carbon\Carbon::now(), ['class' => ($errors->has('birth_date')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Birth Date'])}}';
            html_code += '</div>';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-2">';
            html_code += '{{Form::text('birth_place[]', '', ['class' => ($errors->has('birth_place')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Birth Place'])}}';
            html_code += '</div>';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">';
            html_code += '<label class="primary-color">Province</label>';
            html_code += '</div>';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">';
            html_code += '{{Form::text('province[]', '', ['class' => ($errors->has('province')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label rounded-0', 'placeholder' => 'Province'])}}';
            html_code += '</div>';
            html_code += '</div>';
            html_code += '</div>';

            html_code += '<div class="form-group">';
            html_code += '<div class="form-row mx-auto">';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">';
            html_code += '{!!Form::label('relationship_id', 'Relationship', ['class' => 'primary-color'])!!}';
            html_code += '</div>';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">';
            html_code += '{!!Form::select('relationship_id[]', $relationships, null , ['placeholder' => 'Please pick one', 'class' => 'form-control input-label rounded-0'])!!}';
            html_code += '</div>';
            html_code += '</div>';
            html_code += '</div>';
            html_code += '</div>';

            $('#appendHere').append(html_code);
    });
    $(document).on('click', '.remove', function(){
            var delete_row = $(this).data('row');
            $('#' + delete_row).remove();
        });
});

            </script>
@endsection


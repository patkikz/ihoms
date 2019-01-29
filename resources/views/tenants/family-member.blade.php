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
                            <div class="d-flex">
                                @include('inc.back')
                                <h2>{{$tenant->first_name}}'s Family Member </h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <button id="add" class="btn btn-primary rounded-0 primary-bg">Add Field</button>
                            </div>
                            {!! Form::open(['action' => ['TenantsController@familyMemberStore', $tenant->id], 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}
                                {{Form::hidden('tenant_id', $tenant->id)}}
                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <label class="mt-2">Full Name</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                                {{Form::text('last_name[]', '', ['class' => ($errors->has('last_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Last Name'])}}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                                {{Form::text('first_name[]', '', ['class' => ($errors->has('first_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'First Name'])}}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                                {{Form::text('middle_name[]', '', ['class' => ($errors->has('middle_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Middle Name'])}}
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            <label class="mt-2">Birthday</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            {{Form::date('birth_date[]', \Carbon\Carbon::now(), ['class' => ($errors->has('birth_date')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Birth Date'])}}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            {{Form::text('birth_place[]', '', ['class' => ($errors->has('birth_place')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Birth Place'])}}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            {{Form::text('province[]', '', ['class' => ($errors->has('province')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Province'])}}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-row mx-auto">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                            {!!Form::label('relationship_id', 'Relationship')!!}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            {!!Form::select('relationship_id[]', $relationships, null , ['placeholder' => 'Please pick one', 'class' => 'form-control input-label rounded-0'])!!}
                                    </div>
                                    </div>
                                </div>

                                <div class="" id="appendHere"></div>
                            
                                {{Form::submit('ADD', ['class' => 'btn btn-primary primary-bg rounded-0'])}}
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
             html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">';
             html_code += '<label class="mt-2">Full Name</label>';
             html_code += '</div>';
             html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">';
             html_code += '{{Form::text('last_name[]', '', ['class' => ($errors->has('last_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Last Name'])}}';
             html_code += '</div>';
             html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">';
             html_code += '{{Form::text('first_name[]', '', ['class' => ($errors->has('first_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'First Name'])}}';
             html_code += '</div>';
             html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">';
             html_code += '{{Form::text('middle_name[]', '', ['class' => ($errors->has('middle_name')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Middle Name'])}}';
             html_code += '</div>';
             html_code += '</div>';
             html_code += '</div>';
             
            html_code += '<div class="form-group">';
            html_code += '<div class="form-row mx-auto">';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">';
            html_code += '<label class="mt-2">Birthday</label>';
            html_code += '</div>';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">';
            html_code += '{{Form::date('birth_date[]', \Carbon\Carbon::now(), ['class' => ($errors->has('birth_date')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Birth Date'])}}';
            html_code += '</div>';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">';
            html_code += '{{Form::text('birth_place[]', '', ['class' => ($errors->has('birth_place')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Birth Place'])}}';
            html_code += '</div>';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">';
            html_code += '{{Form::text('province[]', '', ['class' => ($errors->has('province')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm input-label', 'placeholder' => 'Province'])}}';
            html_code += '</div>';
            html_code += '</div>';
            html_code += '</div>';

            html_code += '<div class="form-group">';
            html_code += '<div class="form-row mx-auto">';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">';
            html_code += '{!!Form::label('relationship_id', 'Relationship')!!}';
            html_code += '</div>';
            html_code += '<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">';
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


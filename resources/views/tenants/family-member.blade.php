@extends('layouts.app')

@section('content')
{{$tenant->id}}'s FamilyMember
{!! Form::open(['action' => ['TenantsController@familyMemberStore', $tenant->id], 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'well']) !!}
    
    {{Form::hidden('tenant_id', $tenant->id)}}
    <div class="form-group">
        {!!Form::label('last_name', 'Last Name')!!}
        {!!Form::text('last_name', '', ['placeholder' => 'Last Name', 'class' => 'form-control form-control-sm'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('first_name', 'First Name')!!}
        {!!Form::text('first_name', '',['placeholder' => 'First Name', 'class' => 'form-control form-control-sm'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('middle_name', 'Middle Name')!!}
        {!!Form::text('middle_name', '', ['placeholder' => 'Middle Name', 'class' => 'form-control form-control-sm'])!!}
    </div>
    
    <div class="form-group">
        {!!Form::label('birth_date', 'Birthday')!!}
        {!!Form::date('birth_date', \Carbon\Carbon::now(), ['placeholder' => 'Please pick one', 'class' => 'form-control form-control-sm'])!!}
    </div>

    <div class="form-group">
            {!!Form::label('relationship_id', 'Relationship')!!}
            {!!Form::select('relationship_id', $relationships, null , ['placeholder' => 'Please pick one', 'class' => 'form-control form-control-sm'])!!}
    </div>
   
    {{Form::submit('Submit', ['class' => 'btn btn-outline-success'])}}
{!! Form::close() !!}
@endsection


@extends('layouts.app')

@section('content')
    
    <a href="/tenants" class="btn btn-dark">Go Back</a>
        <h1>{{$tenant->last_name}}</h1>
    
        
                <a href="/tenants/{{$tenant->id}}/edit" class="btn btn-dark">Edit</a>
        
            
                {!!Form::open(['action' => ['TenantsController@destroy', $tenant->id], 
                    'method' => 'POST', 'class' => 'float-right'
                ])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}

@endsection


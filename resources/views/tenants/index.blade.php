@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Homeowner Masterfile
                        <a href="/tenants/create" class="btn btn-outline-primary float-right">Add Tenant</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              
                <h3>Tenants</h3>
                @if(count($tenants) > 0)
                    <table class="table table-striped table-sm">
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th colspan="2">Action</th>
                            
                        </tr>
                        @foreach ($tenants as $tenant)
                         <tr>
                            <td>{{$tenant->last_name}}</td>
                            <td>{{$tenant->first_name}}</td>
                            <td>{{$tenant->middle_name}}</td>
                            <td><a href="/tenants/{{$tenant->id}}/edit" class="btn btn-outline-dark btn-sm">Edit</a></td>
                            <td>
                                    {!!Form::open(['action' => ['TenantsController@destroy', $tenant->id], 
                                    'method' => 'POST'
                                ])!!}
                        
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                @else
                    <em>You have no post yet. Create a post now!</em>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    {{-- @include('inc.search') --}}
                </div>

                <div class="col-xl-12 col-lg-12">

                    <div class="card rounded-0">
                        <div class="card-header">
                            HOMEOWNERS MASTERFILE
                        </div>
                        <div class="card-body">
                            <a href="/tenants/create" class="btn btn-primary float-right primary-bg rounded-0 my-3">Add Homeowner</a>
                            @if(count($tenants) > 0)
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th colspan="3">Action</th>

                                        
                                    </tr>
                                    @foreach ($tenants as $tenant)
                                    <tr>
                                        <td>{{$tenant->last_name}}</td>
                                        <td>{{$tenant->first_name}}</td>
                                        <td>{{$tenant->middle_name}}</td>
                                        <td><a href="/tenants/{{$tenant->id}}/edit" class="btn btn-dark rounded-0 btn-sm">Edit</a>
                                        <td><a href="/tenants/{{$tenant->id}}/family-members" class="btn btn-dark rounded-0 btn-sm">Add Family Member</a></td>
                                        </td>
                                        <td>
                                                {!!Form::open(['action' => ['TenantsController@destroy', $tenant->id], 
                                                'method' => 'POST'
                                            ])!!}
                                    
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger rounded-0 btn-sm'])}}
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
    </div>

</div>

@endsection
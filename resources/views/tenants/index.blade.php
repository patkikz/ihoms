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
                    <div class="au-card au-card-padding rounded border-0">
                    <div class="">Homeowner Masterfile
                        <a href="/tenants/create" class="btn btn-primary float-right primary-bg rounded-0">Add Tenant</a>
                    </div>
    
                    <div class="">
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif --}}
                  
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
                                <td><a href="/tenants/{{$tenant->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                                <td><a href="/tenants/{{$tenant->id}}/family-members" class="btn btn-dark btn-sm">Add Family Member</a></td>
                                </td>
                                <td>
                                        {!!Form::open(['action' => ['TenantsController@destroy', $tenant->id], 
                                        'method' => 'POST'
                                    ])!!}
                            
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
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
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
                        <div class="">Expenses Purpose
                                <a href="/purposes/create" class="btn btn-primary float-right">Add Purpose</a>
                        </div>
        
                        <div class="">
                            {{-- @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif --}}
                        
                        <h3>Purposes</h3>
                        @if(count($purposes) > 0)
                            <table class="table table-striped table-sm">
                                <tr>
                                    <th>Date Created</th>
                                    <th>Purpose Name</th>
                                    <th colspan="2">Action</th>
                                    
                                </tr>
                                @foreach ($purposes as $purpose)
                                    <tr>
                                    <td>{{$purpose->created_at->format('M d Y')}}</td>
                                    <td>{{$purpose->purpose_name}}</td>
                                    <td><a href="/purposes/{{$purpose->id}}/edit" class="btn btn-dark btn-sm">Edit</a></td>
                                    <td>
                                            {!!Form::open(['action' => ['PurposesController@destroy', $purpose->id], 
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
                            <em>There are no existing expense purposes!</em>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
            </div>
        </div>
    </div>
</div>
@endsection
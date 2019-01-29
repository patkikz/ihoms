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
                            <h3>Purposes</h3>
                        </div>
                        <div class="card-body">
                            <a href="/purposes/create" class="btn btn-primary float-right my-3 rounded-0">Add Purpose</a>
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
                                        <td><a href="/purposes/{{$purpose->id}}/edit" class="btn btn-dark btn-sm rounded-0">Edit</a></td>
                                        <td>
                                                {!!Form::open(['action' => ['PurposesController@destroy', $purpose->id], 
                                                'method' => 'POST'
                                            ])!!}
                                    
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm rounded-0'])}}
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
@endsection
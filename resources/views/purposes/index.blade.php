@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Expenses Purpose
                        <a href="/purposes/create" class="btn btn-outline-primary float-right">Add Purpose</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              
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
                            <td><a href="/purposes/{{$purpose->id}}/edit" class="btn btn-outline-dark btn-sm">Edit</a></td>
                            <td>
                                    {!!Form::open(['action' => ['PurposesController@destroy', $purpose->id], 
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
                    <em>There are no existing expense purposes!</em>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
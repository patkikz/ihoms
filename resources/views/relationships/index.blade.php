@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">


                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3>Relationships</h3>
                        </div>
                        <div class="card-body">
                            <a href="/relationships/create" class="btn btn-primary float-right my-3 rounded-0">Add Relationships</a>
                            @if(count($relationships) > 0)
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <th>Date Created</th>
                                        <th>Reservation Type</th>
                                        <th>Amount</th>
                                        <th colspan="2">Action</th>
                                        
                                    </tr>
                                    @foreach ($relationships as $r)
                                        <tr>
                                        <td>{{$r->created_at->format('F d Y')}}</td>
                                        <td>{{$r->relationship_name}}</td>
                                        <td><a href="/relationships/{{$r->id}}/edit" class="btn btn-dark btn-sm rounded-0">Edit</a></td>
                                        <td>
                                                {!!Form::open(['action' => ['RelationshipsController@destroy', $r->id], 
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
                                <em>There are no existing relationships! Create one now!</em>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
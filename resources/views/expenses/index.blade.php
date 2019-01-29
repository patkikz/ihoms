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
                            <h3>Expenses</h3>
                        </div>
                        <div class="card-body">
                            <a href="/expenses/create" class="btn btn-primary float-right rounded-0">Add Expenses</a>
                            @if(count($expenses) > 0)
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <th>Date Created</th>
                                        <th>Purpose</th>
                                        <th>Description</th>
                                        <th colspan="2">Action</th>
                                        
                                    </tr>
                                    @foreach ($expenses as $expense)
                                        <tr>
                                        <td>{{$expense->created_at->format('M d Y')}}</td>
                                        <td>{{$expense->purposes->purpose_name}}</td>
                                        <td>{!!$expense->description!!}</td>
                                        <td><a href="/expenses/{{$expense->id}}/edit" class="btn btn-dark rounded-0 btn-sm rounded-0">Edit</a></td>
                                        <td>
                                                {!!Form::open(['action' => ['ExpensesController@destroy', $expense->id], 
                                                'method' => 'POST'
                                            ])!!}
                                    
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger rounded-0 btn-sm rounded-0'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                {{$expenses->links()}}                     
                            @else
                                <em>There are no existing expenses!</em>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Expenses Monitoring
                        <a href="/expenses/create" class="btn btn-outline-primary float-right">Add Expenses</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              
                <h3>Expenses</h3>
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
                            <td><a href="/expenses/{{$expense->id}}/edit" class="btn btn-outline-dark btn-sm">Edit</a></td>
                            <td>
                                    {!!Form::open(['action' => ['ExpensesController@destroy', $expense->id], 
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
                    <em>There are no existing expenses!</em>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
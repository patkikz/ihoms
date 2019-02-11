@extends('layouts.app')

@section('content')



<div id="wrapper">

    @include('inc.sidebar')
    <div class="py-2 mt-2 clearfix"></div>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    {{-- <header class="mb-2 row justify-center">
                        <div class="col-3 col-sm-2 col-md-6 col-lg-6 col-xl-6" >
                            <div class="float-left text-center text-md-left input-group">
                                <a href="#menu-toggle" class="btn btn-primary rounded-0 primary-bg" id="menu-toggle"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>

                        <div class="col-9 col-sm-10 col-md-6 col-lg-6 col-xl-6" >
                            <div class="float-left text-center text-md-left input-group">
                                <input id="btn-input" type="text" class="form-control input-md rounded-0" placeholder="Search" />
                                <span class="input-group-btn">
                                <button class="btn btn-primary btn-md border-left-0 primary-bg rounded-0"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </header> --}}
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card rounded-0">
                                <div class="card-header">
                                    DASHBOARD{!! auth()->user()->isAdmin == 1 ? ' - Admin' : ' - User' !!}
                                </div>
                                <div class="card-body">
                                    <div>
                                        @can('isAdmin')
                                        <a href="/posts/create" class="btn btn-primary float-right primary-bg rounded-0">Create Post</a>
                                        @endcan
                                    </div>
                    
                                    <div class="">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                    
                                    <h3>Your Blog Posts!</h3>
                                    @if(count($posts) > 0)
                                        <table class="table table-striped table-sm">
                                            <tr>
                                                <th>Title</th>
                                                <th colspan="2">Action</th>
                                                
                                            </tr>
                                            @foreach ($posts as $post)
                                                <tr>
                                                <td>{{$post->title}}</td>
                                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-dark btn-sm">Edit</a></td>
                                                <td>
                                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 
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
                    @can('isAdmin')
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="card rounded-0">
                            <div class="card-header">DAILY TRANSACTIONS</div>
                
                                <div class="card-body">    
                                    {!! $chart->container() !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card rounded-0">
                                <div class="card-header">TRANSACTIONS SUMMARY</div>
                                    <div class="card-body">    
                                        {!! $pie->container()!!}
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endcan
                   

                    {{-- <div class="row">
                        <div class="col-md-8">
                            <div class="card rounded-0">
                                <div class="card-header">Monthly Transactions</div>
                                    <div class="card-body">    
                                        {!! $bar->container()!!}
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

{!! $chart->script() !!}

{!! $pie->script() !!}
{{-- {!! $bar->script() !!} --}}
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>

@endsection
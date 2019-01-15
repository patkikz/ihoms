@extends('layouts.app')

@section('content')

<div id="wrapper">

    @include('inc.sidebar')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    @include('inc.search')

                    <div class="general-title">
                        <h3><i class="fa fa-dashboard"></i> <span>DASHBOARD</span></h3>
                    </div>

                    {{-- <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <div class="au-card rate-counter-block rounded border-0">
                                <div class="icon rate-icon  "> <img src="assets/images/svg/mortgage.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>
                                <div class="rate-box">
                                    <h1 class="loan-rate">3.74%</h1>
                                    <small class="rate-title">Homeowener</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <div class="au-card rate-counter-block rounded border-0">
                                <div class="icon rate-icon  "> <img src="assets/images/svg/loan.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>
                                <div class="rate-box">
                                    <h1 class="loan-rate">8.96%</h1>
                                    <small class="rate-title">Payment</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <div class="au-card rate-counter-block rounded border-0">
                                <div class="icon rate-icon  "> <img src="assets/images/svg/car.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>
                                <div class="rate-box">
                                    <h1 class="loan-rate">6.70%</h1>
                                    <small class="rate-title">Car sticker</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-3">
                            <div class="au-card rate-counter-block rounded border-0">
                                <div class="icon rate-icon  "> <img src="assets/images/svg/credit-card.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>
                                <div class="rate-box">
                                    <h1 class="loan-rate">9.00%</h1>
                                    <small class="rate-title">Credit card</small>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="col-xl-6 col-lg-6 my-5">
                    <div class="au-card au-card-padding rounded border-0">
                        <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                        
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 my-5">
                    <div class="au-card au-card-padding rounded border-0">
                        <div>Dashboard{!! auth()->user()->isAdmin == 1 ? ' - Admin' : ' - User' !!}
                            <a href="/posts/create" class="btn btn-outline-primary float-right">Create Post</a>
                        </div>
        
                        <div class="card-body">
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
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark btn-sm">Edit</a></th>
                                    <th>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 
                                            'method' => 'POST'
                                        ])!!}
                                
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])}}
                                        {!!Form::close()!!}
                                    </th>
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

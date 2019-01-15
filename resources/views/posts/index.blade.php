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
                        <h3><i class="fa fa-bullhorn"></i> <span>ANNOUNCEMENT</span></h3>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12">
                    <div class="au-card au-card-padding rounded border-0">
                        @if (count($posts) > 0)
                            @foreach ($posts as $post)
                                <div class="card bg-faded">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4">
                                                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-8 col-md-8">
                                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                                <small>Written on {{$post->created_at}} by <b>{{$post->user->name}} </b></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{$posts->links()}}
                        @else 
                            <p>No post found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
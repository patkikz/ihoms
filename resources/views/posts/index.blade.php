@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row py-5 my-5">
        <div class="col-lg-12">
            <div class="general-title text-center">
                <h1 class="title">LATEST EVENTS</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    @if (count($posts) > 0)
                    <div class="row">
                        @foreach ($posts as $post)
                            
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}">
                                        <div class="card-body">
                                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                            <small>Written on {{$post->created_at}} by <b>{{$post->user->name}} </b></small>
                                        </div>
                                    </div>
                                </div>
                            
                        @endforeach
                        {{$posts->links()}}
                    </div>
                    @else 
                        <p>No post found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('inc.footer')
    
@endsection
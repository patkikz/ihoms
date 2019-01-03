@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card bg-faded">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" class="card-image">
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
    
@endsection
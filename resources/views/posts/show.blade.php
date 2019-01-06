@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-outline-dark">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div class="container">
    <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid rounded mx-auto d-block">
    </div>
    <br>
    
    <div>
        {!!$post->content!!}
    </div>
        <hr>
        <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
        <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>
        
        
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 
                'method' => 'POST', 'class' => 'float-right'
            ])!!}

                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection

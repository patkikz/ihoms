@extends('layouts.app')

@section('content')
<div class="pt-4 mt-4 clearfix"></div>

<div class="contaner p-5">
    <div class="card rounded-0">
    <div class="card-header pb-1">
        <h4>{{$post->title}}</h4>
    </div>
    <div class="card-body">
    <div class="row">
        <div class="col-lg-6 col-xl-6">
            <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid rounded mx-auto d-block">

        </div>
        <div class="col-lg-6 col-xl-6">
            <div>
                {!!$post->content!!}
            </div>
                <hr>
                <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
                <hr>
            <div class="">
                @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
                    
                    
                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 
                            'method' => 'POST', 'class' => 'float-right'
                        ])!!}
            
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
                @endif
            </div>
        </div>
    </div>
    </div>
    </div>
    <br />
    
</div>

{{-- <a href="/posts" class="btn btn-outline-dark">Go Back</a>
    
    <br> --}}
    
    

    
@endsection

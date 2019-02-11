@extends('layouts.app')

@section('content')
<div class="pt-4 mt-4 clearfix"></div>

<div class="contaner p-5">
    <div class="card rounded-0">
    <div class="card-header pb-1">
        <h4>{{$boardResolution->title}}</h4>
    </div>
    <div class="card-body">
    <div class="row">
        <div class="col-lg-6 col-xl-6">
            <img src="/storage/cover_images/{{$boardResolution->file}}" class="img-fluid rounded mx-auto d-block">

        </div>
        <div class="col-lg-6 col-xl-6">
            <div>
                {!!$boardResolution->description!!}
            </div>
                <hr>
                <small>Written on {{$boardResolution->created_at}} by <b>{{$boardResolution->user->name}}</b></small>
                <hr>
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

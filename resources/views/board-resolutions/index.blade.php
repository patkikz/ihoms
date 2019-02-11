@extends('layouts.app')

@section('content')

<div class="clearfix py-2"></div>

<div class="container">
    <div class="row py-5 my-5">
        <div class="col-lg-12">
            <div class="general-title text-center">
                <h1 class="title">BOARD RESOLUTIONS</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                   @if (count($resolutions) > 0)
                       @foreach ($resolutions as $r)
                       <div class="col-lg-4 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/storage/cover_images/{{$r->file}}">
                                <div class="card-body">
                                    <h3><a href="/board-resolutions/{{$r->id}}">{{$r->title}}</a></h3>
                                    <small>Written on {{$r->created_at}} by <b>{{$r->user->name}} </b></small>
                                </div>
                            </div>
                        </div>
                        {{$resolutions->links()}}
                       @endforeach
                   @else
                       <em>No Board Resolutions</em>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('inc.footer')
    
@endsection
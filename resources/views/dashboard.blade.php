@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard{!! auth()->user()->isAdmin == 1 ? ' - Admin' : ' - User' !!}
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
@endsection

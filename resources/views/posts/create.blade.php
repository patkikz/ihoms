@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
            
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control form-control-sm', 'placeholder' => 'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('contet', 'Content')}}
                {{Form::textarea('content', '', ['id' => 'article-ckeditor','class' => 'form-control form-control-sm', 'placeholder' => 'Content'])}}
            </div>
            
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>

            {{Form::submit('Submit', ['class' => 'btn btn-outline-success'])}}
    {!! Form::close() !!}
@endsection
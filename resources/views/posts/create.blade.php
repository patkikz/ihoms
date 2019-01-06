@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data', 'class' => 'box']) !!}
            
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => ($errors->has('title')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('content', 'Content')}}
                {{Form::textarea('content', '', ['id' => 'article-ckeditor', 'class' => ($errors->has('content')) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Content'])}}
            </div>
            
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>

            {{Form::submit('Submit', ['class' => 'btn btn-outline-success'])}}
    {!! Form::close() !!}
@endsection
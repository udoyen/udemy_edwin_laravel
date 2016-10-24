@extends('layouts.app')

@section('content')
<h1>Edit Page</h1>
{!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}
                                                           
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'Enter title']) !!}
    {!! Form::submit('Update post', ['class'=>'btn btn-primary']) !!}
    
{!! Form::close() !!}
{!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}

    {!! Form::submit('Delete post', ['class'=>'btn btn-dangery']) !!}
    
{!! Form::close() !!}
@endsection

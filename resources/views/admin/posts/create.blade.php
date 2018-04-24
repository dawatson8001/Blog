@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>

    <div class="row">

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Post', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    </div>
    <div class="row">
    @include('includes.form_error')
    </div>
@stop
@extends('layouts.admin')

@section('content')

    <h1>Edit Post</h1>
    <div class="row">
        {!! Form::model($post, [ 'method'=>'PATCH', 'action'=> 'AdminPostsController@update', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
        </div>
        <div>
            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController', $post->id]]) !!}
            <div class="form-group">
                {!! form::submit('delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="row">
        @include('includes.form_error')
    </div>
@stop

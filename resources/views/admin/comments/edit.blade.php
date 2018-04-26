@extends('layouts.admin')

@section('content')

    <h1>Edit Comment</h1>
    <div class="row">
        {!! Form::model($comments, [ 'method'=>'PATCH', 'action'=> ['PostCommentController@update', $comments->id], 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
        </div>
        <div>
            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE', 'action'=> ['PostCommentController@destroy', $comments->id]]) !!}
            <div class="form-group">
                {!! form::submit('Delete Comment', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="row">
        @include('includes.form_error')
    </div>
@stop

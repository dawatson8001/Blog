@extends('layouts.admin')

@section('content')
                <h1>{{$post->title}}</h1>
                <p class="lead">
                    by <a href="#">{{$post->user->name}}</a>
                </p>
                <hr>
                <p><span class="glyphicon glyphicon-time"></span>{{$post->created_at}}</p>
                <hr>
                <!-- Post Content -->
                <p class="lead">{{$post->content}}</p>
                <hr>

@if(Auth::check())
                <!-- Blog Comments -->
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>

                    {!! Form::open(['method'=>'POST', 'action'=> 'PostCommentController@store']) !!}
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <div class="form-group">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Content') !!}
                        {!! Form::textarea('content', null, ['class'=>'form-control', 'rows'=>3]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Leave Comment', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
                <hr>
@endif

@stop
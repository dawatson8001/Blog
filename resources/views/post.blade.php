@extends('layouts.admin')

@section('content')
    <!-- Blog -->
    <h1>{{$post->title}}</h1>
    <p class="lead">
        by{{$post->user->name}}
    </p>
    <hr>
    <p><span class="glyphicon glyphicon-time"></span>{{$post->created_at}}</p>
    <hr>
    <p class="lead">{{$post->body}}</p>
    <hr>
    @if(Auth::check())

        <!-- Comments Form -->

            <h4>Leave a Comment:</h4>
        <div class="form-group">
            {!! Form::open(['method'=>'POST', 'action'=> 'PostCommentController@store', 'files'=>true]) !!}
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <div class="form-group">
                {!! Form::label('body', 'Body') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Leave Comment', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <hr>

        <!-- Comment -->
        <div class="media-body">
        @if(count($comments) > 0)
            @foreach($comments as $comment)
                    <h4 class="media-heading">{{$comment->author}}
                        <small>{{$comment->created_at->diffForHumans()}}</small>
                    </h4>
                    <p>{{$comment->body}}</p>
            @endforeach
        @endif
        </div>
    @endif
@stop

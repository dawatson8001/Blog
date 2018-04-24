@extends('layouts.admin')

@section('content')
    <!-- Blog -->
    <h1>{{$post->title}}</h1>
    <p class="lead">
        by <a href="#">{{$post->user->name}}</a>
    </p>
    <hr>
    <p><span class="glyphicon glyphicon-time"></span>{{$post->created_at}}</p>
    <hr>
    <p class="lead">{{$post->body}}</p>
    <hr>
    @if(Auth::check())

        <!-- Comments Form -->
        <div class="well">
            <h4>Leave a Comment:</h4>
            {!! Form::open(['method'=>'POST', 'action'=> 'PostCommentController@store']) !!}
            <input type="hidden" name="post_id" value="{{$post->id}}">
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

        <!-- Comment -->
        @if(count($comments) > 0)
            @foreach($comments as $comment)
                <div class="media-body">
                    <h4 class="media-heading">{{$comment->author}}
                        <small>{{$comment->created_at->diffForHumans()}}</small>
                    </h4>
                    <p>{{$comment->body}}</p>
                </div>
            @endforeach
        @endif
    @endif
@stop

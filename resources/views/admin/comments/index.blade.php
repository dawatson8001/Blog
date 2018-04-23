@extends('layouts.admin')

@section('content')


@if(count($comment) > 0)
    <h1>Comments</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Author</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>

        @if($comments)

            @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->title}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->content}}</td>
                    <td>{{$comment->created_at->diffForHumans()}}</td>
                    <td><a href="{{route('home.post', $comment->post->id)}}">View Post</a></td>

                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['PostCommentController@destroy', $comment->id]]) !!}
                        <div class="form-group">
                            {!! form::submit('Delete Comment', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach

        @endif

        </tbody>
    </table>
    @else
    <h1 class="text-center">No Comments</h1>
@endif
@stop
@extends('layouts.admin')

@section('content')

        <h1>Comment</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Autho</th>
                <th>Email</th>
                <th>Body</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$comments->id}}</td>
                    <td>{{$comments->author}}</td>
                    <td>{{$comments->email}}</td>
                    <td>{{$comments->body}}</td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['PostCommentController@destroy', $comments->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tbody>
        </table>

@stop
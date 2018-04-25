@extends('layouts.admin')

@section('content')

    <!-- Blog -->
    @foreach($posts as $post)
        <h1> <a href="{{route('home.post', $post->id)}}">{{$post->title}}</a></h1>
        <p class="lead">by{{$post->user->name}}</p>
        <hr>
        <p><span class="glyphicon glyphicon-time"></span>{{$post->created_at}}</p>
        <hr>
        <p class="lead">{{$post->body}}</p>
        <hr>
    @endforeach

@stop

@extends('layouts.admin')

@section('content')

    <table class="table">
        <thead>
          <tr>
              <th>ID</th>
              <th>User ID</th>
              <th>Title</th>
              <th>Content</th>
              <th>Visit</th>
              <th>Created</th>
              <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
          <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->user_id}}</td>
              <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
              <td>{{str_limit($post->content, 20)}}</td>
              <td><a href="{{route('admin.comments.show', $post->id)}}">View Post</a></td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->updated_at->diffForHumans()}}</td>
          </tr>
            @endforeach

            @endif

        </tbody>
      </table>

    @stop
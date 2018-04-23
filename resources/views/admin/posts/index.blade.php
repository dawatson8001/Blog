@extends('layouts.admin')

@section('content')

    <table class="table">
        <thead>
          <tr>
              <th>ID</th>
              <th>User ID</th>
              <th>Title</th>
              <th>Content</th>
              <th>Created</th>
              <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
          <tr>
              <td>{{$post->id}}</td>
              <td><a href="{{route('posts.edit', $post->id)}}"></a>{{$post->user_id}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->content}}</td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->updated_at->diffForHumans()}}</td>
          </tr>
            @endforeach

            @endif

        </tbody>
      </table>

    @stop
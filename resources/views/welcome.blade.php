@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">

            @foreach($post as $posts)
                <!-- Blog Post -->
                    <h2>{{$posts->title}}</h2>
                    <p>{{$posts->body}}</p>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Homepage</div>

                    <div class="panel-body">
                        <!-- Blog Post -->
                        {{--@foreach($post as $posts)--}}
                        {{--<h2>{{$posts->title}}</h2>--}}
                        {{--<p>{{$posts->body}}</p>--}}
                        {{--<hr>--}}
                        {{--@endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

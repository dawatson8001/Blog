<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <link href="{{secure_asset('css/app.css')}}" rel="stylesheet">
    <link href="{{secure_asset('css/libs/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('css/libs/styles.css')}}" rel="stylesheet">
    <link href="{{secure_asset('css/libs/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{secure_asset('css/libs/metisMenu.css')}}" rel="stylesheet">
    <link href="{{secure_asset('css/libs/blog-post.css')}}" rel="stylesheet">
    <link href="{{secure_asset('css/libs/font-awesome.css')}}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body id="admin-page">

<!-- Navigation -->
<nav class=" navbar-fixed" role="navigation">
            <ul class="nav navbar-nav">
                @if(Auth::guest())
                    <a href="{{secure_url('/login') }}">Login</a>
                    <a href="{{secure_url('/register') }}">Register</a>
                @else
                    <td><a href="{{route('home.posts')}}">Home</a></td>
                    <td><a href="{{route('admin.users.index')}}"> View Users</a></td>
                    <td><a href="{{route('admin.users.create')}}">Create User</a></td>
                    <td><a href="{{route('admin.posts.index')}}">View Posts</a></td>
                    <td><a href="{{route('admin.posts.create')}}">Create Post</a></td>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                @endif
            </ul>
</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>

                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
</body>

</html>

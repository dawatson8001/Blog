<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body id="admin-page">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <ul class="nav navbar-nav">
            @if(@Auth::guest())
                <a href="{{ secure_url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @else
                <td><a href="{{route('/')}}">Home</a></td>
                <td><a href="{{route('admin.users.index')}}">View Users</a></td>
                <td><a href="{{route('admin.users.create')}}">Create User</a></td>
                <td><a href="{{route('admin.posts.index')}}">View Posts</a></td>
                <td><a href="{{route('admin.posts.create')}}">Create Post</a></td>
            @endif
        </ul>
    </div>
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

<script src="{{secure_asset('js/libs/metisMenu.js')}}"></script>
<script src="{{secure_asset('js/libs/jquery.js')}}"></script>
<script src="{{secure_asset('js/libs/scripts.js')}}"></script>
<script src="{{secure_asset('js/libs/sb-admin-2.js')}}"></script>
</body>

</html>

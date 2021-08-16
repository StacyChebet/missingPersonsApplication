<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link href="<?php echo asset('css/bootstrap.css')?>" rel="stylesheet" type="text/css">
        <link href="<?php echo asset('css/dashboard.css')?>" rel="stylesheet" type="text/css"> 
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="">TRCKR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">Add Missing Person</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/AddUser') }}">Add User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Missing Person List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>
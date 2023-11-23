<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title1")</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css') }}" />
</head>
<body>
<style> 
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");
    .text {
        font-size: 25px; 
    }
    .border{
        border-radius: 10px;
        width: 90%;
        align-content: center;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">DuaR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>        
                <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('Contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('data') }}">Data</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
</li>
    </ul>
        </div>
    </div>
</nav>
    <div class="container mt-5">
        <h1>@yield("title")</h1>
        <hr>
        @if(session()->has("pesan"))
        <div class="alert alert-info">
            {{ session("pesan") }}
        </div>
        @endif
        @yield("content")
    </div><br>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    Copyright ©DoubleR.
    <a class="text-body" href="https://mdbootstrap.com/">All Right Reserved.</a>
    </div>
        <!-- Copyright -->
</footer>

    <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
</body>
</html>

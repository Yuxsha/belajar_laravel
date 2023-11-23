<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title1")</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}" type="text/css">
</head>
<body>
    <style>
    .nav-link:hover{
        color: #FFFFFF;
        background-color: #87C4FF;
        border-radius: 10px;
        }
    </style>
    <div class="container">
        <h1>@yield("title")</h1>
        <hr>
        @if(session()->has("pesan"))
        <div class="alert alert-info">
            {{ session("pesan") }}
        </div>
        @endif
        @yield("content")
    </div>

    <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
</body>
</html>
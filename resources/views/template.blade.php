<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title1")</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }}">
</head>
<body>
<style> 
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");
    .img {
        filter: brightness(0.5);
        height: 625px;
    }
    .footer-20192 {
    position: relative;
    color: #fff;
    padding: 7rem 0;
    background-color: #141d2a; }
    .footer-20192 .container {
        position: relative; }
    .footer-20192 h3 {
        font-size: 16px;
        margin-bottom: 10px;
        margin-top: 0;
        line-height: 1.5; }
    .footer-20192 .links li {
        margin-bottom: 10px;
        line-height: 1.5;
        display: block; }
        .footer-20192 .links li a {
        color: #666873; }
        .footer-20192 .links li a:hover {
            color: #fff; }
    .footer-20192 .social li {
        display: inline-block;
        position: relative; }
        .footer-20192 .social li a {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-block;
        margin: 0;
        padding: 0;
        background-color: #8186d5;
        color: #fff; }
        .footer-20192 .social li a > span {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); }
    .footer-20192 .footer-logo {
        color: #fff;
        font-size: 20px;
        text-transform: uppercase;
        letter-spacing: .1rem; }
    .footer-20192 .copyright {
        color: #666873; }
    .footer-20192 .cta {
        -webkit-box-shadow: -20px -20px 0 0 rgba(52, 58, 64, 0.2);
        box-shadow: -20px -20px 0 0 rgba(52, 58, 64, 0.2);
        padding: 20px;
        background-color: #8186d5;
        top: -150px;
        position: relative; }
        .footer-20192 .cta h2, .footer-20192 .cta h3 {
        line-height: 1.5; }
        .footer-20192 .cta h3 {
        font-size: 20px; 
        }

</style>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">DuaR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" 
            aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="{{ url('contact') }}">Contact</a>
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
                    </ul>
                </div>
    </div>
</nav>
    <div class="container1 mt-5">
        @if(session()->has("pesan"))
        <div class="alert alert-info">
            {{ session("pesan") }}
        </div>
        @endif
    </div>
    @yield("content")
    <footer class="footer-20192">
        <div class="site-section">
            <div class="container">
            <div class="row">

                <div class="col-sm">
                <a href="#" class="footer-logo">Colorlib</a>
                <p class="copyright">
                    <small>&copy; 2019</small>
                </p>
                </div>
                <div class="col-sm">
                <h3>Customers</h3>
                <ul class="list-unstyled links">
                    <li><a href="#">Buyer</a></li>
                    <li><a href="#">Supplier</a></li>
                </ul>
                </div>
                <div class="col-sm">
                <h3>Company</h3>
                <ul class="list-unstyled links">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                </div>
                <div class="col-sm">
                <h3>Further Information</h3>
                <ul class="list-unstyled links">
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                </div>
                <div class="col-md-3">
                <h3>Follow us</h3>
                <ul class="list-unstyled social">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    <li><a href="#"><span class="icon-medium"></span></a></li>
                    <li><a href="#"><span class="icon-paper-plane"></span></a></li>
                </ul>
                </div>
                
            </div>
            </div>
        </div>
    </footer>

    <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
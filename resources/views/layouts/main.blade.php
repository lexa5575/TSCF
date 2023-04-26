<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{ asset("assets/vendors/flag-icon-css/css/flag-icon.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/font-awesome/css/all.min.css") }}">
    <link href="{{ asset("assets/vendors/aos/aos.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <script src="{{ asset("assets/vendors/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/js/loader.js") }}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{route('main.index')}}"><img src="{{ asset('assets/images/logo.svg') }}" alt="Edica"></a>

            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('main.index')}}" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>

                    </li>

                </ul>
            </div>
        </nav>

    </div>
</header>

@yield('content')

<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="{{route('main.index')}}" class="footer-brand-wrapper">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="edica logo">
                </a>
                <p class="contact-details">lexa5575@gmail.com</p>
                <p class="contact-details">+48729273910</p>
                <nav class="footer-social-links">
                    <a href="https://www.facebook.com/aleksei.chuprynin" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instagram.com/alekseiche11?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://t.me/GoodandGod" target="_blank"><i class="fab fa-telegram"></i></a>
                    <a href="https://www.youtube.com/channel/UCkwhG8hc4759IUO0zLFdJnQ" target="_blank"><i class="fab fa-youtube"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">

                    <a href="{{route('main.index')}}" class="nav-link">Blog</a>

                </nav>
            </div>

            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i class="fas fa-chevron-down ml-2"></i>
                    </button>

                </div>
            </div>
        </div>
        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
                <a href="#!">Privacy & Policy</a>
                <a href="#!">Terms</a>
                <a href="#!">Site Map</a>
            </nav>
            <p class="mb-0">© Edica. 2020 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">bootstrapdash</a> . All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 2000
    });
</script>
</body>
</html>

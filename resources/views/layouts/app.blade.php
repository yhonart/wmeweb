<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PT. Wahyu Mustika Engineering</title>

    <!-- Scripts -->    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('scss/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('icons/fonts/bootstrap-icons.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-light animate__animated animate__fadeInDown navbar-on-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/wme_logo.png')}}" alt="" srcset="" class="img-fluid" style="max-width:100px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-semibold" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-semibold" href="#">Bisnis Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-semibold" href="#">Proyek Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-semibold" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-semibold" href="#">Karir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('aos-master/dist/aos.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{asset('slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <script>
        AOS.init({
            once: true,
            duration: 2000,
        });
        $(document).ready(function(){
            $('.news-and-project').slick({
                ddots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                responsive: [{
                    breakpoint: 900,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },            
                {
                    breakpoint: 400,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
            $('.customers-brand').slick({
                ddots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                responsive: [{
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },            
                {
                    breakpoint: 400,
                    settings: {
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }]
            });            
        });
    </script>
</body>
</html>

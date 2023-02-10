<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/public/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/public/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/public/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/public/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/public/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/public/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/public/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/public/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/public/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('/public/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/public/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/public/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/public/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/public/images/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('/public/images/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <title>PT. Wahyu Mustika Engineering</title>
    <!-- Scripts -->    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">    
    <!-- Styles -->
    <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/scss/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/public/css/carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/icons/font/bootstrap-icons.css')}}">
    <style>
        .putar{
            width: 50%;
            height: 50%;      
            position: fixed;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin:auto;
            text-align: center;
        }

        #overlay{
            height: 100%;
            width: 100%;
            background: #f9f9f9;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1060;
        }
    </style>
</head>
<body>
    <div class="overlay" id="overlay">
        <div class="putar animate__animated animate__zoomIn">
            <img src="{{asset('/public/images/landingpage.png')}}" alt="" height="160" class="img-fluid">
        </div>
    </div>
    <nav class="navbar navbar-expand-lg fixed-top bg-white navbar-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand d-none d-md-block" href="{{url('/')}}">
                <img src="{{asset('/public/images/Brand-WME.png')}}" alt="Bootstrap" height="60">
            </a>
            <a class="navbar-brand d-block d-md-none" href="#">
                <img src="{{asset('/public/images/Brand-Mobile.png')}}" alt="Bootstrap" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('company.navbar.about')
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-dark" href="quality">@lang('company.aboutdown.kebijakan')</a></li>
                            <li><a class="dropdown-item text-dark" href="#">@lang('company.aboutdown.struktur')</a></li>
                            <li><a class="dropdown-item text-dark" href="#">@lang('company.aboutdown.sertifikat')</a></li>
                        </ul>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark" href="{{url('/')}}/#Services">@lang('company.navbar.service')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark" href="{{url('/')}}/#News">@lang('company.navbar.news')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark" href="{{url('/')}}/#Contactperson">@lang('company.navbar.contact')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark" href="carier">@lang('company.navbar.carier')</a>
                    </li> 
                    @auth
                    <li class="nav-item">
                        <a id="navbarDropdown" class="nav-link fw-bold text-primary" href="Admin_Page" role="button">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    @endauth
                </ul>
                <div class="p-2">
                    <a href="lang/en" class="navbar-text p-1"><img src="{{asset('/public/images/icon/united-kingdom-box.png')}}" alt="" srcset="" class="img-fluid" style="max-width:25px;"></a>                 
                    <a href="lang/id" class="navbar-text p-1"><img src="{{asset('/public/images/icon/indonesia.png')}}" alt="" srcset="" class="img-fluid" style="max-width:30px;"></a>
                </div>
            </div>            
        </div>
    </nav>
    @yield('content')
    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4">
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-6 col-md-4 mb-3">
                        <p class="fs-6 fw-bold">Office & Workshop I</p>
                        <address>
                            Link. Sambirangon RT.002/002
                            <br>
                            Kalitimbang Cibeber - Kota Cilegon, Banten
                        </address>
                        <p class="fs-6 fw-bold">Workshop II</p>
                        <address>
                            Villa Mutiara Indah 3
                            <br>
                            Taman Kebalen Blok E1 No. 46
                            <br>
                            Babetan - Bekasi, Jawa Barat
                            <br>
                            Telp. 021-22145265 Fax. 021-5908876
                        </address>
                        <p class="fs-6 fw-bold">Contact Person</p>
                        <ul>
                            <li><span class="fw-bold">Mustakim </span>: +62813 1045 5332</li>
                            <li><span class="fw-bold">Imam </span>: +62813 9870 0989</li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-6offset-md-1 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <h5>Company</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">@lang('company.navbar.about')</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">@lang('company.aboutdown.kebijakan')</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">@lang('company.aboutdown.struktur')</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">@lang('company.aboutdown.sertifikat')</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">@lang('company.navbar.service')</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">@lang('company.navbar.news')</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">@lang('company.navbar.contact')</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">@lang('company.navbar.carier')</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <h5>Product & Services</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mechanical</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Electrical</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Manufacture Industri</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Marine</a></li>                                
                                </ul>
                                <h5>Social Media</h5>
                                <ul class="nav justify-content-start list-unstyled d-flex">
                                    <li class="ms-3"><a class="text-muted" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                        </svg>
                                    </a></li>
                                    <li class="ms-3"><a class="text-muted" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg>
                                    </a></li>
                                    <li class="ms-3"><a class="text-muted" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                    </a></li>                                
                                    <li class="ms-3"><a class="text-muted" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                        </svg>
                                    </a></li>                                
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <form>
                                    <h5>Subscribe to our newsletter</h5>
                                    <p>Monthly digest of what's new and exciting from us.</p>
                                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                        <label for="newsletter1" class="visually-hidden">Email address</label>
                                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                        <button class="btn btn-primary" type="button">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-center border-top">
                    <p class="text-center text-primary">&copy; 2022 PT. Wahyu Mustika Engineering</p>            
                </div>
            </footer>
        </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{asset('/public/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/public/aos-master/dist/aos.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{asset('/public/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <script>        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
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
        $(document).ready(function(){ 
            setTimeout(function(){ $('.overlay').fadeOut(); },2000); 
        });
    </script>
</body>
</html>

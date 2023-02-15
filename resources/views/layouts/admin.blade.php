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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/public/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('/public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('/public/admin/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/public/admin/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/public/admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('/public/admin/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- jQuery -->
    <script src="{{asset('/public/admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('/public/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('/public/js/app.js')}}"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm">    
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-blue navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                @auth
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="#">
                        Hi! {{ Auth::user()->name }}
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }} <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endauth
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <a href="{{url('/')}}" class="brand-link">
                <img src="{{asset('/public/images/Brand-Mobile.png')}}" alt="WME Logo" class="brand-image img-circle">
                <span class="brand-text font-weight-light">WME | Admin</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('Admin_Page')}}/Services" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Product & Service
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Admin_Page')}}/News" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    News & Project
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Admin_Page')}}/Menu" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Web Menu
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        @yield('content')
        <div class="modal fade" id="extentionModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="field-data-modal"></div>
                    </div>                    
                </div>
            </div>
        </div>        
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('/public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('/public/admin/plugins/chart.js/Chart.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('/public/admin/plugins/sparklines/sparkline.js')}}"></script>        
        <!-- jQuery Knob Chart -->
        <script src="{{asset('/public/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{asset('/public/admin/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('/public/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('/public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('/public/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('/public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('/public/admin/dist/js/adminlte.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('/public/admin/dist/js/demo.js')}}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('/public/admin/dist/js/pages/dashboard.js')}}"></script>  
        <script>
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $(document).on('click','.open-modal-global', function(e){
                    e.preventDefault();
                    $("#extentionModal").modal('show').find(".field-data-modal").load($(this).attr('href'));
                });
            });
        </script> 
    </div>
</body>
</html>

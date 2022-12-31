@extends('layouts.app')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{asset('images/slider/1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{asset('images/slider/2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{asset('images/slider/3.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section id="whyme">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-primary title" data-aos="fade-up">Mengapa Memilih Kami</h4>
                <p class="lead" data-aos="fade-up">Alasan mengapa perusahaan anda harus memilih kami</p> 
            </div>
        </div>
        <div class="row">            
            <div class="col-lg-6 col-12 text-center" style="background: url({{asset('images/tools.jpg')}}) center / cover no-repeat;">
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-8">
                        <div class="card bg-warning" data-aos="fade-right">                            
                            <div class="card-body">
                                <span class="fs-7 fw-bold">Jaminan Kualitas Yang Baik</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-2">
                    <div class="col-8">
                        <div class="card bg-warning" data-aos="fade-right">                            
                            <div class="card-body">
                                <span class="fs-7 fw-bold">Pengiriman Tepat Waktu</span>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-2 mb-5">
                    <div class="col-8">
                        <div class="card bg-warning" data-aos="fade-right">                            
                            <div class="card-body">
                                <span class="fs-7 fw-bold">Harga Yang Bersaing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-left mt-5">
                <h5 class="fs-5 fw-bold lh-4 text-primary" data-aos="fade-right">Kami Berpengalaman</h5>
                <p class="fs-7 fw-5 px-4 text-muted" data-aos="fade-right">Kami telah banyak mengerjakan dalam bidang mechanical, electrical, manufacture industri dan juga banyak melakukan pekerjaan-pekerjaan di bidang marine. Sehingga tidak ada lagi keraguan anda untuk memilih kami</p>
                <h5 class="fs-5 fw-bold lh-4 text-primary" data-aos="fade-right">Mempunyai Tim Terbaik</h5>
                <p class="fs-7 fw-5 px-4 text-muted" data-aos="fade-right">Kami menempatkan Tim terbaik pada semua proyek yang dikerjakan, kami tahu betul untuk mewujudkan sebuah mimpi yang besar memerlukan orang-orang yang terbaik di bidangnya.</p>
                <h5 class="fs-5 fw-bold lh-4 text-primary" data-aos="fade-right">Inovasi & Komunikasi</h5>
                <p class="fs-7 fw-5 px-4 text-muted" data-aos="fade-right">Dalam setiap pekerjaan kami selalu melakukan inovasi dan melakukan komunikasi yang baik kepada pelanggan kami agar dapat tercipta hasil yang terbaik untuk anda.</p>
            </div>
        </div>
    </div>
</section>
<section id="aboutme">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-primary title" data-aos="fade-up">Tentang Kami</h4>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6 col-12 text-center">
                <p class="fs-7 fw-5" data-aos="fade-right">
                    <span class="fw-bold text-primary">PT. Wahyu Mustika Engineering</span> adalah sebuah perusahaan Engineering, Contracting & Supplier. Kami menawarkan jasa engineering, procurement, contructing & maintenance dalam bidang electrical dan automation dalam proses pembangunan industry juga pembangunan gedung komersial.
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <p class="fs-7 fw-5" data-aos="fade-right">
                    <span class="fw-bold text-primary">Visi & Misi Kami</span> Menjadi partner terbaik bagi perusahaan-perusahaan di seluruh dunia merupakan visi kami. Dan selangkah demi selangkah, kami coba meriahnya melalui tiga misi utama, yaitu Jaminan Kualitas, Pengiriman Tepat Waktu dan Harga Yang Bersaing.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="Services" class="bg-blue-800">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-light title" data-aos="fade-up">Produk & Layanan</h4>
                <p class="lead text-light" data-aos="fade-up">Kami memiliki produk dan layanan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12 mb-2">
                <div class="example-2 card-services mt-4" data-aos="zoom-in-up" id="Mechanical">
                    <div class="wrapper" style="background: url({{asset('images/services/1.png')}}) center / cover no-repeat;">                        
                        <div class="data">
                            <div class="content">
                                <h5 class="title"><a href="#Mechanical">Mechanical</a></h5>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, enim dolor cum neque ea minima tempore.</p>
                                <a href="#Mechanical" class="button">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-lg-3 col-12 mb-2">
                <div class="example-2 card-services mt-4" data-aos="zoom-in-up" id="Electrical">
                    <div class="wrapper" style="background: url({{asset('images/services/2.jpg')}}) center / cover no-repeat;">                        
                        <div class="data">
                            <div class="content">
                                <h5 class="title"><a href="#Electrical">Electrical</a></h5>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, enim dolor cum neque ea minima tempore.</p>
                                <a href="#Electrical" class="button">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 mb-2">
                <div class="example-2 card-services mt-4" data-aos="zoom-in-up" id="Manufacture">
                    <div class="wrapper" style="background: url({{asset('images/services/3.jpg')}}) center / cover no-repeat;">                        
                        <div class="data">
                            <div class="content">
                                <h5 class="title"><a href="#Manufacture">Manufacture Industri</a></h5>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, enim dolor cum neque ea minima tempore.</p>
                                <a href="#Manufacture" class="button">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 mb-2">
                <div class="example-2 card-services mt-4" data-aos="zoom-in-up" id="Marine">
                    <div class="wrapper" style="background: url({{asset('images/services/5.png')}}) center / cover no-repeat;">                        
                        <div class="data">
                            <div class="content">
                                <h5 class="title"><a href="#Marine">Marine</a></h5>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, enim dolor cum neque ea minima tempore.</p>
                                <a href="#Marine" class="button">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Customers">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-primary title" data-aos="fade-up">Pelanggan Kami</h4>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="customers-brand">
                    @foreach($wmeclient as $wmec)
                        <div class="text-center">
                            <img src="{{asset('images/customers')}}/{{$wmec->client_img_name}}.{{$wmec->client_img_type}}" alt="" class="img-fluid">
                        </div>
                    @endforeach                    
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="customers-brand">
                    @foreach($wmeclient2 as $wmecs)
                        <div class="text-center">
                            <img src="{{asset('images/customers')}}/{{$wmecs->client_img_name}}.{{$wmecs->client_img_type}}" alt="" class="img-fluid">
                        </div>
                    @endforeach                    
                </div>
            </div>
        </div>
    </div>
</section>
<section id="News">
    <div class="container-fluid site-product">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-primary title" data-aos="fade-up">Proyek & Berita</h4>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="news-and-project">
                    <div class="card card-daz">
                        <img src="{{asset('images/portfolio/p2.png')}}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Project</h5>
                            <p class="card-text">Penjelasan singkat project</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card card-daz">
                        <img src="{{asset('images/portfolio/p4.png')}}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Project</h5>
                            <p class="card-text">Penjelasan singkat project</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card card-daz">
                        <img src="{{asset('images/portfolio/p5.png')}}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Project</h5>
                            <p class="card-text">Penjelasan singkat project</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card card-daz">
                        <img src="{{asset('images/portfolio/p6.png')}}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nama Project</h5>
                            <p class="card-text">Penjelasan singkat project</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
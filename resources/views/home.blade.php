@extends('layouts.app')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide carousel-fade">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{asset('/public/images/slider/manufacture-slider.png')}}" class="img-fluid d-none d-sm-block" alt="...">
        <img src="{{asset('/public/images/slider/manufacture-slider-mobile1.png')}}" class="img-fluid d-block d-sm-none" alt="...">
        <div class="carousel-caption align-items-center justify-content-center d-none d-sm-block">            
            <h1 class="display-2 text-white mb-md-4 fw-semibold">Mechanical, Electrical</h1>
            <h1 class="display-2 text-white mb-md-4 fw-semibold">Manufacture Industry</h1>
            <a href="#Contactperson" class="btn btn-primary btn-md">@lang('company.contactnow')</a>
        </div>
        <div class="carousel-caption text-start d-block d-sm-none">            
            <h4 class="fw-bold">Mechanical</h5>
            <h4 class="fw-bold">Electrical</h4>
            <h4 class="fw-bold">Manufacture Industries</h4>            
            <a href="#Contactperson" class="btn btn-primary py-md-3 px-md-5">@lang('company.contactnow')</a>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{asset('/public/images/slider/our-team.png')}}" class="img-fluid d-none d-sm-block" alt="...">
        <img src="{{asset('/public/images/slider/our-team-mobile.png')}}" class="img-fluid d-block d-sm-none" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1 class="fw-bold text-white mb-md-4 fw-semibold">@lang('company.slideteam')</h1>
            <p>@lang('company.slideteamlead')</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{asset('/public/images/slider/electrical.png')}}" class="img-fluid d-none d-sm-block" alt="...">
        <img src="{{asset('/public/images/slider/electrical-mobile.png')}}" class="img-fluid d-block d-sm-none" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h3 class="fw-bold">PT. Wahyu Mustika Engineering</h3>
            <p>@lang('company.slideproject')</p>
            <a href="#Contactperson" class="btn btn-primary btn-md">@lang('company.ourservices')</a>
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
                <h4 class="fw-bold text-primary title" data-aos="fade-up">@lang('company.why')</h4>
                <p class="lead fw-semibold" data-aos="fade-up">@lang('company.whyreasons')</p> 
            </div>
        </div>
        <div class="row">            
            <div class="col-lg-6 col-12 text-center" style="background: url({{asset('/public/images/tools.jpg')}}) center / cover no-repeat;">
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-8">
                        <div class="card bg-warning" data-aos="fade-right">                            
                            <div class="card-body">
                                <span class="fs-7 fw-bold">@lang('company.goodquality')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-2">
                    <div class="col-8">
                        <div class="card bg-warning" data-aos="fade-right">                            
                            <div class="card-body">
                                <span class="fs-7 fw-bold">@lang('company.delivery')</span>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-2 mb-5">
                    <div class="col-8">
                        <div class="card bg-warning" data-aos="fade-right">                            
                            <div class="card-body">
                                <span class="fs-7 fw-bold">@lang('company.prices')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-left mt-5">
                <h5 class="fs-5 fw-bold lh-4 text-primary" data-aos="fade-right">@lang('company.experienced')</h5>
                <p class="fs-7 fw-5 px-4 text-muted" data-aos="fade-right">@lang('company.leadexperienced')</p>
                <h5 class="fs-5 fw-bold lh-4 text-primary" data-aos="fade-right">@lang('company.thebesttean')</h5>
                <p class="fs-7 fw-5 px-4 text-muted" data-aos="fade-right">@lang('company.leadthebesttean')</p>
                <h5 class="fs-5 fw-bold lh-4 text-primary" data-aos="fade-right">@lang('company.innovation')</h5>
                <p class="fs-7 fw-5 px-4 text-muted" data-aos="fade-right">@lang('company.leadinnovation')</p>
            </div>
        </div>
    </div>
</section>
<!-- <section>
    <div class="container">
        <div class="row mt-2">
            <img src="{{asset('/public/images/ISO-1.png')}}" alt="" class="img-fluid">
        </div>
    </div>
</section> -->
<section id="aboutme">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-primary title" data-aos="fade-up">@lang('company.navbar.about')</h4>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6 col-12 text-center">
                <p class="fs-7 fw-5" data-aos="fade-right">
                    @php
                        print $aboutus->about_desc;
                    @endphp
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <p class="fs-7 fw-5" data-aos="fade-right">
                    @php
                        print $vision->vision_desc;
                    @endphp
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="aboutme" class="btn btn-blue-800 fw-bold">@lang('company.readmore')</a>
            </div>
        </div>
    </div>
</section>
<section id="Services" class="bg-blue-800">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-light title" data-aos="fade-up">@lang('company.navbar.service')</h4>
            </div>
        </div>
        <div class="row">
            @foreach($product as $p)
            <div class="col-lg-4 col-12 mb-2">
                <div class="example-2 card-services mt-4" data-aos="zoom-in-up" id="{{$p->product_id}}">
                    <div class="wrapper" style="background: url({{asset('/public/images/services')}}/{{$p->product_cover}}) center / cover no-repeat;">                        
                        <div class="data">
                            <div class="content">
                                <h5 class="title"><a href="#">{{$p->product_title}}</a></h5>
                                <p class="text">{{substr($p->product_content,0,100)}}....</p>
                                <a href="#" class="btn btn-blue-800 btn-xs mt-2">@lang('company.readmore')</a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            @endforeach            
        </div>
    </div>
</section>
<section id="Customers">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-primary title" data-aos="fade-up">@lang('company.ourcustomers')</h4>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="customers-brand">
                    @foreach($wmeclient as $wmec)
                        <div class="text-center">
                            <img src="{{asset('/public/images/customers')}}/{{$wmec->client_img_name}}.{{$wmec->client_img_type}}" alt="" class="img-fluid">
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
                            <img src="{{asset('/public/images/customers')}}/{{$wmecs->client_img_name}}.{{$wmecs->client_img_type}}" alt="" class="img-fluid">
                        </div>
                    @endforeach                    
                </div>
            </div>
        </div>
    </div>
</section>
<section id="News" class="site-product">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-warning title" data-aos="fade-up">@lang('company.newsandproject')</h4>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="news-and-project">                    
                    @foreach($project as $p)
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('/public/images/portfolio')}}/{{$p->img_cover}}" alt="..." class="card-img-top" style="object-fit:cover;">
                                </div>
                                <h5 class="card-title">{{$p->project_name}}</h5>
                                <p class="card-text">{{$p->project_desc}}</p>
                                <a href="#" class="btn btn-blue-800">Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section id="instagrampost">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-primary title" data-aos="fade-up">Instagram Post</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="customers-brand">
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CgLBQZ6hcc1/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CgLBQZ6hcc1/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CgLBQZ6hcc1/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Pt. wahyu mustika engineering (@pt.wahyu_mustika_engineering)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Contactperson">
    <div class="container bg-blue-800 site-team">
        <div class="row mt-5">
            <div class="col-lg-8 col-12">
                <h3 class="text-light title ms-4">@lang('company.contactquestion')</h3>
                <h5 class="text-light mt-2 mb-4 ms-4">@lang('company.contactquestiondesc')</h5>
            </div>
            <div class="col-lg-4 col-12 mt-4">                
                <div class="d-grid gap-2">
                    <button class="btn btn-danger mt-2 " type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                        </svg>
                        Email
                    </button>
                    <button class="btn btn-success mt-2 mb-4" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                        Whatsapp
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
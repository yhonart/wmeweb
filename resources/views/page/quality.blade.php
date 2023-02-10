@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary p-5 hero-header mb-5 d-none d-sm-block">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">@lang('company.aboutdown.kebijakan')</h2>            
        </div>
    </div>
</div>
<div class="container bg-primary p-5 mb-5 d-block d-sm-none">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">@lang('company.aboutdown.kebijakan')</h2>            
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">            
            <div class="col-12">
                <div data-aos="fade-right">
                    @php
                        print $quality->about_desc;
                    @endphp
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-12">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="flaticon-cctv d-block display-1 fw-normal text-secondary mb-3"></i>                        
                        <h3 class="mb-3 text-primary">@lang('company.qms')</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores consectetur quam, hic commodi sit obcaecati iure.</p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="flaticon-cctv d-block display-1 fw-normal text-secondary mb-3"></i>                        
                        <h3 class="mb-3 text-primary">@lang('company.komitmen')</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores consectetur quam, hic commodi sit obcaecati iure.</p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="flaticon-cctv d-block display-1 fw-normal text-secondary mb-3"></i>                        
                        <h3 class="mb-3 text-primary">@lang('company.fokus')</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores consectetur quam, hic commodi sit obcaecati iure.</p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                    <div class="position-relative p-5">
                        <i class="flaticon-cctv d-block display-1 fw-normal text-secondary mb-3"></i>                        
                        <h3 class="mb-3 text-primary">@lang('company.tinjauan')</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores consectetur quam, hic commodi sit obcaecati iure.</p>
                        <a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
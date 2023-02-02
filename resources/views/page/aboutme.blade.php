@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary p-5 hero-header mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">@lang('company.navbar.about')</h2>            
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex flex-column flex-sm-row justify-content-center">
            <iframe class="youtube-embade" src="https://www.youtube.com/embed/jDLuJLoaA_g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div data-aos="fade-right">
                    @php
                        print $aboutus->about_desc;
                    @endphp
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div data-aos="fade-left">
                    @php
                        print $vision->vision_desc;
                    @endphp
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <a href="#" class="btn btn-blue-800 btn-md">Download PDF</a>
                <a href="#" class="btn btn-blue-800 btn-md">Download Brosure</a>
            </div>
        </div>
    </div>
</section>
@endsection
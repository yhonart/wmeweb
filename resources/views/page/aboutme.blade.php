@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <nav aria-label="breadcrumb bg-light">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('company.navbar.about')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-bold text-primary title" data-aos="fade-up">@lang('company.navbar.about')</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex flex-column flex-sm-row justify-content-center">
                <iframe class="youtube-embade" src="https://www.youtube.com/embed/jDLuJLoaA_g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
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
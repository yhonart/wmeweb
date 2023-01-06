@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <nav aria-label="breadcrumb bg-light">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="aboutme">@lang('company.navbar.about')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('company.aboutdown.kebijakan')</li>
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
                <h4 class="fw-bold text-primary title" data-aos="fade-up">@lang('company.aboutdown.kebijakan')</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12" style="background: url({{asset('images/quality2.png')}}) center / cover no-repeat;">
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="fs-2 fw-bold text-light">Quality Policy</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div data-aos="fade-right">
                    @php
                        print $quality->about_desc;
                    @endphp
                </div>
            </div>
        </div>
        <div class="row mt-5 border-top">
            <div class="col-12 d-flex justify-content-center">
                <a href="" class="btn btn-light btn-sm ms-2 mt-1">@lang('company.qms')</a>
                <a href="" class="btn btn-light btn-sm ms-2 mt-1">@lang('company.komitmen')</a>
                <a href="" class="btn btn-light btn-sm ms-2 mt-1">@lang('company.fokus')</a>
                <a href="" class="btn btn-light btn-sm ms-2 mt-1">@lang('company.tinjauan')</a>
            </div>
        </div>
    </div>
</section>
@endsection
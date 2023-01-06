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
            <div class="col-md-6 col-12">
                <img src="{{asset('images/quality.png')}}" alt="" srcset="" class="img-daz">
            </div>
            <div class="col-md-6 col-12">
                <div data-aos="fade-right">
                    @php
                        print $quality->about_desc;
                    @endphp
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
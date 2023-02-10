@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary p-5 hero-header mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">@lang('company.navbar.about')</h2>            
        </div>
    </div>
</div>
<section>
    <div class="container py-5">
        <div class="row g-5">
            @foreach($product as $p)
            <div class="col-lg-2 col-12 mb-2">
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
@endsection
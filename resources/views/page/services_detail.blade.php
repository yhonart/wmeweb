@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary p-5 hero-header mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">{{$productDetail->product_title}}</h2>            
        </div>
    </div>
</div>
<section>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-12 mb-2">
                <div class="mb-5">
                    <img src="{{asset('/public/images/services')}}/{{$productDetail->product_cover}}" alt="" srcset="" class="img-fluid w-100 rounded mb-5">                  
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                print $productDetail->product_content
                ?>
            </div>
        </div>        
    </div>
</section>
@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary p-5 hero-header mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">{{$projectDetail->project_name}}</h2>            
        </div>
    </div>
</div>
<section class="page-bg">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-12">
                <img src="{{asset('/public/images/portfolio')}}/{{$projectDetail->project_id}}/{{$projectDetail->img_cover}}" alt="" srcset="" class="rounded img-fluid">
            </div>
            <div class="col-lg-8 col-12">
                <?php
                    print $projectDetail->project_desc;
                ?>
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col-12 border-bottom border-primary">
                <h4 class="fst-italic mb-4 text-primary">{{$projectDetail->project_name}} Gallery</h4>
            </div>
            <div class="col-12 text-center mb-4">
            @foreach($projectGallery as $pgal)
                <img src="{{asset('public/images/portfolio')}}/{{$id}}/{{$pgal->gallery_name}}" alt="" srcset="" class="img-daz-round">
            @endforeach
            </div>
        </div>       
        <div class="row">
            <div class="col-12 border-bottom border-primary">
                <h4 class="fst-italic mb-4 text-primary">Others {{$projectDetail->product_category}} Categories</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="LoadDataProject"></div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function() {
        let category = '{{$projectDetail->product_category}}';
        $.ajax({
            type:'POST',
            url:"{{route('home')}}/projectCategory",
            data:{Category:category},
            success:function(response){
                $('.LoadDataProject').html(response);
            }
        })
    })
</script>
@endsection
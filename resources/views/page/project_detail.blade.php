@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary p-5 hero-header mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">{{$projectDetail->project_name}}</h2>            
        </div>
    </div>
</div>
<section>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <?php
                    print $projectDetail->project_desc;
                ?>
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col-12">
                <h4 class="fst-italic mb-4 text-primary">Project Gallery</h4>
            </div>
            <hr>
            <div class="col-12 text-center">
            @foreach($projectGallery as $pgal)
                <img src="{{asset('public/images/portfolio')}}/{{$id}}/{{$pgal->gallery_name}}" alt="" srcset="" class="img-daz-round">
            @endforeach
            </div>
        </div>       
    </div>
</section>
@endsection
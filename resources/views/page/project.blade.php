@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary p-5 hero-header mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">@lang('company.newsandproject')</h2>            
        </div>
    </div>
</div>
<section>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-12">
                <div class="news-and-project">                    
                    @foreach($data as $p)
                        <div class="card">
                            <div class="card-body p-2" style="height:300px">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('/public/images/portfolio')}}/{{$p->project_id}}/{{$p->img_cover}}" alt="..." class="card-img-top" style="object-fit:cover;">
                                </div>
                                <h5 class="card-title">{{$p->project_name}}</h5>
                                <p class="card-text">
                                    <?php
                                        print substr($p->project_desc,0,50);
                                    ?>
                                </p>
                                <a href="{{route('project')}}/detail/{{$p->project_id}}" class="btn btn-blue-800">Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>      
    </div>
</section>
@endsection
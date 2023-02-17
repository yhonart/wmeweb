<div class="news-and-project mt-2 ">                    
    @foreach($project as $p)
        <div class="card" data-aos="fade-up">
            <div class="card-body p-2">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('/public/images/portfolio')}}/{{$p->project_id}}/{{$p->img_cover}}" alt="..." class="card-img-top" style="object-fit:cover;">
                </div>
                <div class="mt-2">
                    <h5 class="card-title">{{$p->project_name}}</h5>
                </div>
                <div class="mt-2">
                    <a href="{{route('project')}}/detail/{{$p->project_id}}" class="btn btn-blue-800">@lang('company.readmore')</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<script>
    $(document).ready(function(){
        $('.news-and-project').not('.slick-initialized').slick({
            ddots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            responsive: [{
                breakpoint: 900,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },            
            {
                breakpoint: 400,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });
</script>
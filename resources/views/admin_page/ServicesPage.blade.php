@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products & Services</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-12">
                    <button type="button" class="btn btn-primary open-modal-global" href="{{route('Admin_Page')}}/News/Add">
                        Add Product & Service <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="btn-group">
                        <button class="btn btn-default btn-md selectlang" id-lang="id">ID</button>
                        <button class="btn btn-default btn-md selectlang" id-lang="en">English</button>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="text-center loading-service-table" style="display:none;">
                        <span class="spinner-grow spinner-grow-sm"></span>
                        <span class="spinner-grow spinner-grow-sm text-info"></span>
                        <span class="spinner-grow spinner-grow-sm text-maroon"></span>
                        Please Wait ....
                    </div>
                    <div class="fetch-lang-table"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(function(){
        $(".loading-service-table").fadeIn();
        let lang = "id";
        $.ajax({
            type:'get',
            url:"{{route('Admin_Page')}}/Services/Table/"+lang,
            success:function(response){
                $(".loading-service-table").fadeOut();
                $(".fetch-lang-table").html(response);
            }
        })
    })
    $('.selectlang').on('click', function (){
        let element = $(this);
        let LangInfo = element.attr("id-lang");
        $(".loading-service-table").fadeIn();
        $.ajax({
            type:'get',
            url:"{{route('Admin_Page')}}/Services/Table/"+LangInfo,
            success:function(response){
                $(".loading-service-table").fadeOut();
                $(".fetch-lang-table").html(response);
            }
        })
    })
</script>
@endsection
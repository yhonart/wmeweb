@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">News & Project</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary open-modal-global" href="{{route('Admin_Page')}}/News/Add">
                        Add Project <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="text-center loading-news-table" style="display:none;">
                        <span class="spinner-grow spinner-grow-sm"></span>
                        <span class="spinner-grow spinner-grow-sm text-info"></span>
                        <span class="spinner-grow spinner-grow-sm text-maroon"></span>
                        Please Wait ....
                    </div>
                    <div class="news-table"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(function(){
        $(".loading-news-table").fadeIn();
        $.ajax({
            type:'get',
            url:"{{route('Admin_Page')}}/News/Table",
            success:function(response){
                $(".loading-news-table").fadeOut();
                $(".news-table").html(response);
            }
        })
    })
</script>
@endsection
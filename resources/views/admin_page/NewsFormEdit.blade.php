@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">News Update</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header border-0">
                        <h3 class="card-title">Edit Project {{$editproject->project_name}}</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="FormNewsEdit">
                            <input type="hidden" name="idproject" value="{{$IdProject}}">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Project Title</label>
                                <div class="col-sm-8">
                                    <input type="Text" name="edittitle" id="EditTitle" autocomplete="off" class="form-control" value="{{$editproject->project_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Project Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group date" id="DateProject" data-target-input="nearest">
                                        <input type="text" name="editdateproject" class="form-control datetimepicker-input" data-target="#DateProject"/>
                                        <div class="input-group-append" data-target="#DateProject" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                    <textarea id="EditDesc" name="editdesc">
                                        <?php
                                            print $editproject->project_desc;
                                        ?>
                                    </textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-8">
                                    <div class="text-right">
                                        <span class="fw-bold text-success" style="display:none;" id="NotifEditService">✔ Data Tersimpan</span>
                                    </div>
                                </div>
                                <div class="col-4 text-right">
                                    <button type="submit" class="btn btn-md btn-success  fw-bold" id="UpdatingProject">Save</button>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bold">Project Gallery</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">                        
                        <div class="row">
                            <div class="col-md-12">
                                <form id="FormAddGallery">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Add Gallery</label>
                                        <div class="col-sm-8">
                                            <input type="File" name="Text" id="Text" autocomplete="off" placeholder="Text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-danger btn-add-gallery ">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-4">
                            @if(!empty($projectgallery))
                                <div class="col-12">
                                    <p>⚠ <em>Tidak ada gallery yang di masukkan</em></p>
                                </div>
                            @else
                                @foreach($projectgallery as $pg)
                                    <div class="col-md-3 col-12">
                                        <img src="" alt="" srcset="">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(function () {
        // Summernote
        $('#EditDesc').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
        $('#DateProject').datetimepicker({
            format: 'YYYY-M-D',
            defaultDate: "{{$editproject->project_date}}",           
        });        
    });
    
    $(document).ready(function(){
        $("form#FormNewsEdit").submit(function(event){
            event.preventDefault(); 
            $.ajax({ 
                url: "{{route('Admin_Page')}}/News/PostingEdit", 
                type: 'POST', 
                data: new FormData(this), 
                async: true, 
                cache: true, 
                contentType: false, 
                processData: false, 
                success: function (data) {
                    $("#NotifEditService").fadeIn();
                } 
            }); 
            return false; 
        }); 
    })
</script>
@endsection
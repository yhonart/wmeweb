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
            <div class="col-md-12">
                <div class="card">            
                    <div class="card-body">
                        <form id="FormEditService">
                            <input type="hidden" name="idproduk" value="{{$editservice->product_id}}">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product</label>
                                <div class="col-sm-10">
                                    <input type="Text" name="editproduk" autocomplete="off" value="{{$editservice->product_title}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Product Subtitle :</label>
                                <textarea class="EditThisService" name="editsubtitle">
                                    <?php
                                        print $editservice->product_subtitle;
                                    ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Product Description :</label>
                                <textarea class="EditThisService" name="editcontent">
                                    <?php
                                        print $editservice->product_content;
                                    ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" id="UpdateService">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(function () {
        // Summernote
        $('.EditThisService').summernote({
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
    });
    $(document).ready(function(){
        $("form#FormEditService").submit(function(event){
            event.preventDefault(); 
            $("#UpdateService").fadeOut();
            $.ajax({ 
                url: "{{route('Admin_Page')}}/Services/PostingEdit", 
                type: 'POST', 
                data: new FormData(this), 
                async: true, 
                cache: true, 
                contentType: false, 
                processData: false, 
                success: function (data) {
                    Toast.fire({
                        icon: 'success',
                        title: 'Your data has been saved'
                    })
                    $("#UpdateService").fadeIn();
                } 
            }); 
            return false; 
        });
    });
</script>
@endsection
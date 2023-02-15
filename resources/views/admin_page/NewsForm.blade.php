<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">            
            <div class="card-body">
                <form id="formAddNews">
                    <div class="form-group">
                        <input type="Text" name="projectTitle" id="projectTitle" autocomplete="off" placeholder="Title" class="form-control">
                    </div>                    
                    <div class="input-group date" id="DateProject" data-target-input="nearest">
                        <input type="text" name="projectDate" class="form-control datetimepicker-input" data-target="#DateProject"/>
                        <div class="input-group-append" data-target="#DateProject" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <select name="clientName" id="clientName" class="form-control">
                            <option value="">- Select Client -</option>
                            @foreach($wmeclient as $wc)
                                <option value="{{$wc->client_id}}">{{$wc->client_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <select name="projectCategory" id="projectCategory" class="form-control">
                            <option value="">- Project Category -</option>
                            @foreach($wmeproduct as $wmeprod)
                                <option value="{{$wmeprod->product_title}}">{{$wmeprod->product_title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <textarea id="projectDesc" name="projectDesc">
                            Penjelasan Project
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Upload Cover Project</label>
                        <input type="File" name="fileCover" id="fileCover" autocomplete="off" placeholder="Text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success fw-semibold" id="BtnAddNews">Submit</button>
                    </div>
                </form>            
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        // Summernote
        $('#projectDesc').summernote({
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
        });        
    });
    $(document).ready(function(){
        $("form#formAddNews").submit(function(event){
            $("#BtnAddNews").fadeOut();
            event.preventDefault(); 
            $.ajax({ 
                url: "{{route('Admin_Page')}}/News/PostingAddNews", 
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
                    $('body').removeClass('modal-open');
                    $("#extentionModal").modal('hide');
                    $('.modal-backdrop').remove();
                    $("#BtnAddNews").fadeIn();
                } 
            }); 
            return false; 
        }); 
    })
</script>
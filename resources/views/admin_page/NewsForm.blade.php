<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">            
            <div class="card-body">
                <form id="formAddNews">
                    <div class="form-group">
                        <input type="Text" name="Text" id="Text" autocomplete="off" placeholder="Title" class="form-control">
                    </div>                    
                    <div class="input-group date" id="DateProject" data-target-input="nearest">
                        <input type="text" name="editdateproject" class="form-control datetimepicker-input" data-target="#DateProject"/>
                        <div class="input-group-append" data-target="#DateProject" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <textarea id="EditDesc" name="editdesc">
                            Penjelasan Project
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Upload Cover Project</label>
                        <input type="File" name="Text" id="Text" autocomplete="off" placeholder="Text" class="form-control">
                    </div>
                </form>            
            </div>
        </div>
    </div>
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
        });        
    });
</script>
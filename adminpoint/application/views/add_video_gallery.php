<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <form method="post" id="video-gallery-form" action="<?= base_url('video-upload-insert'); ?>" autocomplete="off" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">वीडियो गैलरी</h4>
                                <div class="row mb-3">
                                    <div class="form-group row"><label class="col-sm-2 col-form-label"> वीडियो का मुख्य शीर्षक (Title) </label>
                                        <div class="col-sm-10">
                                            <textarea name="caption_name" class="form-control" id="caption_name"></textarea>
                                            <span class="invalid-feedback"><?php echo form_error('caption_name'); ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="col-sm-2 col-form-label">वीडियो अपलोड करे</label>
                                    <div class="col-sm-6 custom-file">
                                        <input type="file" name="file[]" accept="video/*" class="custom-file-input form-control" id="customFile">
                                        <span class="invalid-feedback"><?php echo form_error('customFile'); ?></span>
                                    </div>
                                    <small class="col-sm-4" style="color: red;font-weight: bold;">केवल MP4/WMV/AVI/FLV/F4V/MKV/WEBM ही वीडियो टाईप अपलोड करे</small>
                                </div>
                            </div>
                            <div class="row mt-3 text-center">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>&nbsp;
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<!-- body end -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
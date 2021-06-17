<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <form method="post" id="photo-gallery-form" action="<?= base_url(); ?>photo-upload-insert" autocomplete="off" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">वेबिनार आयोजित करें</h4>
                                <div class="row mb-3 text-center">
                                <p><a href="javascript:void(0);" NAME="Error Handling"  style="font-size: 18px;font-weight: bold;" title="ZeroDivisionError handling" onClick=window.open("https://meet.google.com/?hs=197&pli=1&authuser=0","Ratting","width=550,height=170,left=150,top=200,toolbar=0,status=0,");>Click here to create the webinar link</a></p>
                                </div>

                                
                            </div>
                            <!-- <div class="row mt-3 text-center">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>&nbsp; -->
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



                <!-- <iframe src='https://meet.google.com/' width=400 height=400 /> -->
            
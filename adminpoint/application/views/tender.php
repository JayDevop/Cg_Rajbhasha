<!-- <!DOCTYPE html>
<html>
<body class=" pane bg-white">

    <div id="wrapper"> -->
<!-- side bar -->
<!-- <?php //include('admin_include/head.php'); 
        ?>
        <?php //include('admin_include/side_bar.php'); 
        ?> -->
<!--  <div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom"> -->
<!-- upper header -->
<!-- <?php //include('admin_include/upper_header.php'); 
        ?>   -->
</div>
<!-- body content -->
<div class="wrapper wrapper-content">
    <form action="<?= base_url(); ?>tender-upload-insert" autocomplete="off" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Upload Tender <small></small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Tender Name</label>
                            <div class="col-sm-10"><input type="text" name="tender_name" class="form-control"></div>
                        </div>



                        <div class="form-group row"><label class="col-sm-2 col-form-label">Tender Closing Date</label>

                            <div class="col-sm-10">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" name="closing_date" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <!-- <label class="col-sm-2 col-form-label">Upload Type</label> -->
                            <!-- <div class="col-sm-4">
                                <select class="form-control m-b" name="upload_type">
                                    <option value="">Select Upload Type</option>
                                    <option value="0">Tender</option>
                                    <option value="1">Corrigendum</option>
                                </select>
                            </div> -->

                            <label class="col-sm-2 col-form-label">Upload Tender</label>
                            <div class="col-sm-4" style="margin-left:15px"> 
                                <input id="logo1" type="file" name="tender_file[]" accept="application/pdf" class="custom-file-input">
                                <label for="logo1" class="custom-file-label">Choose file...</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Upload Corrigendum</label>
                            <div class="col-sm-4" style="margin-left:15px"> 
                                <input id="logo2" type="file" name="corrigendum_file[]" multiple="multiple" accept="application/pdf" class="custom-file-input">
                                <label for="logo2" class="custom-file-label">Choose file...</label>
                            </div>

                        </div>



                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white btn-sm" type="button">Cancel</button>
                                <button class="btn btn-primary btn-sm" type="submit">Upload</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<!-- body end -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>

<!-- footer -->
<!-- <?php //include('admin_include/footer.php'); 
        ?>  -->
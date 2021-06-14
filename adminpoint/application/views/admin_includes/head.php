<!doctype html>
<html lang="en">

    
 
<head>

        <meta charset="utf-8" />
        <title><?php echo @$title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url('../assets/img/logo.png')?>">

        <!-- Bootstrap Css -->
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=base_url()?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="<?=base_url()?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?=base_url()?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <script src="<?=base_url()?>assets/libs/jquery/jquery.min.js"></script>

    </head>

    <!-- Load delete modal -->
    <div class="modal fade bs-example-modal-sm" id="deleteModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <span style="margin-left: 35%;"><i class="fa fa-times-circle fa-5x text-danger"></i></span><br>
                    <h5><strong>Are you sure ?</strong></h5>
                </div>
                <div class="modal-footer" style="text-align: center;">
                    <a href="" class="btn btn-danger btn-sm" id="del_url">Delete</a>
                    <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Load delete modal -->

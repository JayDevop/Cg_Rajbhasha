        <!-- <div class="footer">
            <div class="float-right">
                <strong></strong>
            </div>
            <div>
                <p>Copyright © <?php echo date('Y'); ?> . All rights reserved by <a href="https://www.chips.gov.in/" target="_blank">CHiPS</a></p>
            </div>
        </div>
           </div>
    </div>
</body>

</html> -->
</div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">

                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>



                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="<?=base_url()?>assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="<?=base_url()?>assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="<?=base_url()?>assets/css/bootstrap-dark.min.css" data-appStyle="<?=base_url()?>assets/css/app-dark.min.css" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="<?=base_url()?>assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="<?=base_url()?>assets/css/app-rtl.min.css" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        
        <script src="<?=base_url()?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?=base_url()?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?=base_url()?>assets/libs/node-waves/waves.min.js"></script>
        <script src="<?=base_url()?>assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?=base_url()?>assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- apexcharts -->
        <!-- <script src="<?=base_url()?>assets/libs/apexcharts/apexcharts.min.js"></script> -->

        <script src="<?=base_url()?>assets/js/pages/dashboard.init.js"></script>

        <!-- ckeditor -->
        <script src="<?=base_url()?>assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

        <script>
            if($("textarea").hasClass("classic-editor")){
                ClassicEditor
                .create( document.querySelector( '.classic-editor' ) )
                .catch( error => {
                    console.error( error );
                } );
            }
        </script>

        <!-- Required datatable js -->
        <script src="<?=base_url()?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?=base_url()?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?=base_url()?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>assets/libs/jszip/jszip.min.js"></script>
        <script src="<?=base_url()?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?=base_url()?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?=base_url()?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?=base_url()?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?=base_url()?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="<?=base_url()?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?=base_url()?>assets/js/pages/datatables.init.js"></script>

        <script> var base_url = '<?php echo base_url(); ?>'; </script>

        <script>
            $(document).ready(function(){
                $(document).on('click', '.delete', function(){
                    var id = $(this).data('id');
                    var url = $(this).data('url');
                    $('#deleteModal').modal('toggle');
                    $('#deleteModal').modal('show');
                    $('#del_url').attr('href', base_url+url+'/'+id);
                });
            });
        </script>

        <script src="<?=base_url()?>assets/js/app.js"></script>
    </body>


 
</html>

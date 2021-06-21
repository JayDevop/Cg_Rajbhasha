<div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="<?php echo base_url('admin-dashboard'); ?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?=base_url('../assets/img/logo.png')?>" alt="" height="60">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=base_url('../assets/img/logo.png')?>" alt="" height="60">
                        </span>
                    </a>

                    <a href="<?php echo base_url('admin-dashboard'); ?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?=base_url('../assets/img/logo.png')?>" alt="" height="60">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=base_url('../assets/img/logo.png') ?>" alt="" height="60">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li>
                                <a href="<?php echo base_url('admin-dashboard'); ?>">
                                    <i class="uil-home-alt"></i>
                                    <span>डैशबोर्ड</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('manage-pages'); ?>" class="waves-effect">
                                    <i class="uil-window-section"></i>
                                    <span>पेज प्रबंधित करें </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('content-list'); ?>" class="waves-effect">
                                    <i class="uil-window-section"></i>
                                    <span>प्रकरण सूची</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('photo-gallery'); ?>">
                                    <i class="uil-photo-alt"></i>
                                    <span>फोटो गैलरी</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?php echo base_url('video-gallery'); ?>">
                                    <i class="uil-photo-alt"></i>
                                    <span>वीडियो गैलरी</span>    
                                </a>
                            </li>


                            <li>
                                <a href="<?php echo base_url('webinar-conduct'); ?>">
                                    <i class="uil-window-alt"></i>
                                    <span>वेबिनार आयोजित करें</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
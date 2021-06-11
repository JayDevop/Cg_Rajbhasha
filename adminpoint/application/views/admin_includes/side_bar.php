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
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-window-section"></i>
                                    <span>Manage pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="<?php echo base_url('manage-about'); ?>">About Us</a>
                                    </li>
                                    
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
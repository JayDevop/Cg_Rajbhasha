    <nav class="navbar-default navbar-static-side" role="navigation"> <!-- style="
    position:fixed;
    left: 0;
    top: 0;" -->
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element text-center">
                        <img alt="image" class=" text-center bg-white" style="border-radius:7px" src="<?=base_url()?>../assets/img/logo.png" height="40px;"/>
                        <!-- <a>
                            <span class="block m-t-xs font-bold">Super User</span>
                            <span class="text-muted text-xs block">Admin</span>
                        </a> -->
                    </div>
                    <div class="logo-element">
                        RDA Raipur
                    </div>
                </li>
                <li <?php if($page_act=="home"){?>class="active" <?php } ?>>
                    <a href="#"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
                </li>
                <li <?php if($page_act=="at"){?>class="active" <?php } ?>>
                    <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Advt and Tenders</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page_name=="tender"){?>class="active"<?php } ?>><a href="<?= base_url('tender-upload') ?>">Upload Tenders</a></li>
                        <li <?php if($page_act=="actv"){?>class="active"<?php } ?>><a href="#">Application Form</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Projects</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="#">Current Projects</a></li>
                        <li><a href="#">Complete Projects</a></li>
                        <li><a href="#">Future Projects</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Insert</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Flot Charts</a></li>
                        <li><a href="#">Morris.js Charts</a></li>
                        <li><a href="#">Rickshaw Charts</a></li>
                        <li><a href="#">Chart.js</a></li>
                        <li><a href="#">Chartist</a></li>
                        <li><a href="#">c3 charts</a></li>
                        <li><a href="#">Peity Charts</a></li>
                        <li><a href="#">Sparkline Charts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning float-right">16/24</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="mailbox.html">Inbox</a></li>
                        <li><a href="mail_detail.html">Email view</a></li>
                        <li><a href="mail_compose.html">Compose email</a></li>
                        <li><a href="email_template.html">Email templates</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>  </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Basic form</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="float-right label label-primary">SPECIAL</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Search results</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info float-right">NEW</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Notification</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Typography</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Static Tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Products grid</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Lightbox Gallery</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info float-right">62</span></a>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="#"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning float-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="#"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                </li> -->
            </ul>

        </div>
    </nav>
  
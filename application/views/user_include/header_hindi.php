<script>
  .blink_me {
    animation: blinker 1s linear infinite;
    }
  @keyframes blinker {  
    50% { opacity: 0; }
  }
</script>
<body id=bg style>
  <div id=page class=site>
    <div class=preeloader><div class=preloader-spinner></div></div>
    <header class=header>
      <div class="topbar">
        <div class=container>
          <div class=row>
            <div class="col-lg-8 col-12">
              <div class=top-contact>
                <div class=single-contact><i class="fa fa-phone"></i>फ़ोन:  +91 - 771 -2536188</div>
                <div class="single-contact blink_me"><i class="fa fa-phone"></i>टोल फ्री न.: 1800-233-7188</div>
                <div class=single-contact><i class="fa fa-envelope-open"></i>ईमेल: info@rdaraipur.com</div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class=topbar-right>
                <ul class=social-icons>
                  <li><a href="https://www.facebook.com/rdaraipur/" target=_blank><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="https://twitter.com/rdaraipur" target=_blank><i class="fa fa-twitter"></i></a>
                  </li>
                   <li><a class=linkedin href="http://www.rdaraipur.blogspot.in/" target=_blank><i class="fa fa-commenting-o"></i></a></li>
                  <li><a  href="<?=base_url('Home')?>"><i>English</i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=middle-header>
        <div class=container-fluid>
          <div class=row>
            <div class=col-12>
              <div class=middle-inner>
                <div class=row>
                  <div class="col-lg-2 col-md-1 col-12">
                    <div class=logo>
                      <div class=img-logo>
                        <a>
                          <img src="<?=base_url()?>assets/img/logo.png" alt=#>
                        </a>
                      </div>
                      <div class="right-button d-sm-none" style="right: 48px; top:21px; padding: 1px 5px;"><a href="https://rda.cgstate.gov.in/payment_test/dataform.php" class=bizwheel-btn>ऑनलाइन पे</a>
                      </div>
                    </div>
                    <div class=mobile-nav></div>
                  </div>
                  <div class="col-lg-10 col-md-11 col-12">
                    <div class=menu-area>
                      <nav class="navbar navbar-expand-lg">
                        <div class=navbar-collapse>
                          <div class=nav-inner>
                            <div class=menu-home-menu-container>
                               <!-- style="    font-size: 14px;" -->
                              <ul id=nav class="nav main-menu menu navbar-nav" style="">
                                <li><a href="<?=base_url('Home')?>">होम</a></li>
                                <li class=icon-active><a href=#>हमारे बारे में</a>
                                  <ul class=sub-menu>
                                    <li><a href="<?=base_url('About-Organisation')?>">संगठन</a></li>
                                      <li><a href="#">सीईओ डेस्क से</a></li>
                                      <li><a href="#">निदेशक मंडल</a></li>
                                      <li><a href="#">वित्तीय रिपोर्ट</a></li>
                                      <li class=icon-active><a href="#">अधिनियम</a>
                                        <ul class=sub-menu>
                                          <li><a href="#">आरडीए</a></li>
                                          <li><a href="<?=base_url('assets/pdf/land_acquisition.pdf')?>">भूमि अधिग्रहण</a></li>
                                          <li><a href="<?=base_url('assets/pdf/rti.pdf')?>">आरटीआई</a></li>
                                        </ul>
                                      </li>
                                      <li class=icon-active><a href="#">सरकार की नीतियां</a>
                                        <ul class=sub-menu>
                                          <li><a href="#">आईटी / आईटीईएस</a></li>
                                          <li><a href="#">औद्योगिक</a></li>
                                        </ul>
                                      </li>                             
                                    </ul>
                                </li>
                                <li class=icon-active><a href=#>इंद्रप्रस्थ</a>
                                  <ul class="sub-menu">
                                    <li><a href="<?=base_url('assets/pdf/indraprasth_ftwo/ind_form_one.pdf')?>">इंद्रप्रस्थ फेज- I प्लॉट आवेदन पत्र</a>
                                    </li>
                                    <li class=icon-active><a href="#">इंद्रप्रस्थ फेज- II प्लॉट आवेदन पत्र</a>
                                      <ul class="sub-menu">
                                      <li><a target="_blank" href="<?=base_url('assets/pdf/indraprasth_ftwo/residential_plots_form.pdf')?>"><span>आवासीय भूखंड फार्म</span></a>
                                      </li>
                                      <li><a target="_blank" href="<?=base_url('assets/pdf/indraprasth_ftwo/composite.pdf')?>"><span>समग्र रूप</span></a>
                                      </li>
                                      <li><a target="_blank" href="<?=base_url('assets/pdf/indraprasth_ftwo/indraprasth_phase_raipura.pdf')?>"><span>इंद्रप्रस्थ फेज -2 रायपुरा एलआईजी -2 बीएचके एप्लीकेशन फॉर्म</span></a>
                                      </li>
                                    </ul>     
                                    </li>
                                    <li><a href="<?=base_url('Indraprasth-Phase-One-Details')?>"><span>फेज - I</span></a>
                                    </li>
                                    <li><a href="<?=base_url('Indraprasth-Phase-Two-Details')?>"><span>फेज - II</span></a>
                                    </li>
      
                                    <li><a target="_blank" href="<?=base_url()?>assets/pdf/indraprasth_ftwo/rera.pdf "><span>रेरा पंजीकरण संख्या (IP-2)</span></a>
                                    </li>
                                  </ul>
                                </li>

                                <li class=icon-active><a href=#>कमल विहार</a>
                                  <ul class=sub-menu>
                                    <li class=icon-active><a href=#>कमल विहार एप्लीकेशन फॉर्म</a>
                                       <ul class="sub-menu">
                                          <li><a target="_blank" href="<?=base_url('assets/pdf/kamal_vihar/health_form.pdf')?>"><span>हेल्थ प्लॉट फॉर्म</span></a>
                                          </li>
                                          <li><a target="_blank" href="<?=base_url('assets/pdf/kamal_vihar/residential_plots_form.pdf')?>"><span>आवासीय भूखंड फार्म</span></a>
                                          </li>
                                          <li><a target="_blank" href="<?=base_url('assets/pdf/kamal_vihar/education_plot_form.pdf')?>"><span>एजुकेशन प्लॉट फॉर्म</span></a>
                                          </li>
                                          <li><a target="_blank" href="<?=base_url('assets/pdf/kamal_vihar/row_houses.pdf')?>"><span>घरों की पंक्ति</span></a>
                                          </li>
                                          <li><a target="_blank" href="<?=base_url('assets/pdf/kamal_vihar/boriya_khurd.pdf')?>"><span>बोरिया खुर्द PMAY LIG-1</span></a>
                                          </li>
                                          <li><a target="_blank" href="<?=base_url('assets/pdf/kamal_vihar/com_plot.pdf')?>"><span>वाणिज्यिक भूखंड फार्म</span></a>
                                          </li>
                                          <li><a target="_blank" href="<?=base_url('assets/pdf/kamal_vihar/psp.pdf')?>"><span>पीएसपी फॉर्म</span></a>
                                          </li>
                                        </ul>   
                                    </li>
                                    <!-- <li class=icon-active><a href=#>Lottery Management System</span></a></li> -->
                                    <li class=icon-active><a href="<?=base_url('assets/pdf/kamal_vihar/ip_2 drawing.pdf')?>">चित्र</span></a></li>
                                    <li class=icon-active><a href="<?=base_url('assets/pdf/kamal_vihar/kvreradoc.pdf')?>">RERA पंजीकरण संख्या</span></a></li>
                                    <li class=icon-active><a href="<?=base_url('assets/pdf/kamal_vihar/kamal_vihar_sale_lease.pdf')?>">भूमि की बिक्री / लीज (मनोरंजन पार्क) sec3</a></li>
                                  </ul>
                                </li>
                                <li class=icon-active><a href=#>PMAY योजना</a>
                                </li>
                                <li class=icon-active><a href="<?=base_url('OtherScheme-Details')?>">अन्य</a>
                              
                                </li>
                                <li class=icon-active><a href=#>समाचार और गैलरी</a>
                                  <ul class="sub-menu">
                                    <li><a href="#"><span>समाचार</span></a></li>
                                    <li><a href="#"><span>फोटो</span></a></li>
                                    <li><a href="#"><span>ब्लॉग</span></a></li>
                                  </ul>
                                </li>


                                <li class=icon-active><a href="<?=base_url('Tenders-Details')?>">निविदा</a>
                                </li>
                              </ul>

                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </nav>
                      <div class="right-button d-sm-block"><a href="https://rda.cgstate.gov.in/payment_test/dataform.php" class=bizwheel-btn>ऑनलाइन पे</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
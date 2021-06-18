<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">


      <h1 class="logo me-auto"><a href="<?php echo base_url(); ?>"><img src=<?=base_url('assets/img/logo.png')?>>&nbsp;छत्तीसगढ़ राजभाषा आयोग</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?php echo base_url(); ?>">मुख्य पृष्ठ</a></li>
          <li><a href="<?php echo base_url('about-us'); ?>">हमारे बारे में</a></li>
          <li><a href="<?php echo base_url('training'); ?>">प्रशिक्षण</a></li>
          <li><a href="<?php echo base_url('seminar'); ?>">सम्मेलन</a></li>
          <!-- <li><a href="<?php echo base_url('publication'); ?>">प्रकाशन</a></li> -->
          <li class="dropdown"><a href="#"><span>प्रकाशन</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#"></a></li>
              <li><a href="<?=base_url('#')?>">वर्ष 2019-2020</a></li>
              <li><a href="<?=base_url('#')?>">वर्ष 2020-2021</a></li>
              <li><a href="<?=base_url('#')?>">वर्ष 2021-2022</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('grant'); ?>">अनुदान</a></li>
          <li class="dropdown"><a href="#"><span>ग़ैलरी</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#"></a></li>
              <li><a href="<?=base_url('photo-gallery')?>">फोटो ग़ैलरी</a></li>
              <li><a href="<?=base_url('video-gallery')?>">वीडियो ग़ैलरी</a></li>
            </ul>
          </li>
          <li><a href="#">वेबिनार</a></li>
          <li><a href="#">संपर्क</a></li>
          <li><a href="<?=base_url('adminpoint/login')?>">लॉग इन</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

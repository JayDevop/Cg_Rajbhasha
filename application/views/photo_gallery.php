

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
      
        <h2>फोटो ग़ैलरी</h2>
        <p>फोटो एंव पेपर कटिंग</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

      <div class="row">
        <?php

    $count = sizeof($photoList);
    //print_r($photoList);exit();
    if ($count > 0) {
      for ($i = 0; $i < $count; $i++) {
        $filepath = "assets/uploads/photo_gallery/"; ?>
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo $filepath.$photoList[$i]["uploaded_file_name"]; ?>" alt="..." style="width:100%">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">" <?php echo $photoList[$i]["caption_name"]; ?> "</a></h5>
                <p class="fst-italic text-center"><?php 
                $date = $photoList[$i]["posted_on"];
                $date = strtotime($date);
                echo "uploaded on - " .date('l, d-M-Y h:i:s', $date);?></p>
                <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p> -->
              </div>
            </div>
          </div>
          
    <?php }
  } ?>
    </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  
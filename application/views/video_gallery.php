

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>वीडियो ग़ैलरी</h2>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <?php
  
    $count = sizeof($videoList);
    //print_r($photoList);exit();
    if ($count > 0) {
      for ($i = 0; $i < $count; $i++) {
        $filepath = "assets/uploads/video_gallery/"; ?>
        <div class="col-lg-4 col-md-4 d-flex" style="height: 250px;">
                    <div class="member">
                        <video height="60%" width="100%" controls>
                            <source src="<?php echo $filepath.$videoList[$i]["uploaded_file_name"]; ?>" type="video/mp4">
                            <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                        </video>
                        <div class="member-content">
                            <p><strong><h5><?php echo $videoList[$i]["caption_name"]; ?></strong></h5>
                           <?php 
                            $date = $videoList[$i]["posted_on"];
                            $date = strtotime($date);
                            echo "uploaded on - " .date('l, d-M-Y h:i:s', $date);?></p>
                        </div>
                    </div>
                </div>
        <?php }
        }
         ?>
                
                
               
                
                
            </div>
        </div>
    </section><!-- End Events Section -->
</main><!-- End #main -->

  
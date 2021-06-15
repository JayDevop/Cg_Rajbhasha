  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  
  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets/vendor/aos/aos.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url()?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?=base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>assets/js/main.js"></script>

    <script>
        $(function(){
            setNavigation();
        });
        function setNavigation(){
            var path = window.location.href;
            path = path.replace(/\/$/, "");
            path = decodeURIComponent(path);
            $("nav.navbar a").each(function(){
                var href = $(this).attr('href');
                if(path == href){
                // if(path.substring(0, href.length) == href){
                    $(this).closest('li a').addClass('active');
                }
            });
        }
    </script>

</body>

</html>
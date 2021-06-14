<script>
    var base_url = '<?php echo base_url(); ?>';
    $(document).ready(function(){
        $(document).on('change', '#pageid', function(){
            var pageid = $(this).val();
            $.ajax({
                type: "POST",
                url: base_url+"get-page-content",
                data: { pageid : pageid },
                dataType: 'json',
                cache: false,
                beforeSend: function() {
                    $("#loader").show();
                },
                success: function(response){
                    // $('#center_id').html(option);
                    $('#loader').hide();
                    $('#pageid').removeClass('is-invalid');
                    $('#pageid~span').text('');
                }
            });
        });
    });

    $(document).on('submit', '#manage-page-form', function(e){
        var flag = true;
        if($('#pageid').val() == '' || $('#pageid').val() == 0){
            $('#pageid').addClass('is-invalid');
            $('#pageid~span').text('Please select page');
            flag = false;
        }else{
            $('#pageid').removeClass('is-invalid');
            $('#pageid~span').text('');
        }

        if($('#content').val() == ''){
            $('#content').addClass('is-invalid');
            $('#content~span').text('Please write page contents');
            flag = false;
        }else{
            $('#content').removeClass('is-invalid');
            $('#content~span').text('');
        }

        if(flag == false){
            e.preventDefault();
        }else{
            return true;
        }
    });
 </script>
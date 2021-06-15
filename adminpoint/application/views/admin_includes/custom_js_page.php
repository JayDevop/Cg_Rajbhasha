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
                    if(response['status'] == 'success'){
                        if(response['output']){
                            console.log(response['output']['content'])
                            $('.ck-editor__editable p').html(response['output']['content'])
                            // $('#content').val(response['output']['content']);
                        }else{
                            $('.ck-editor__editable p').html('')
                        }
                        
                    }
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

    $(document).on('submit', '#photo-gallery-form', function(e){
        var flag = true;
        if($('#caption_name').val() == '' || $('#caption_name').val() == 0){
            $('#caption_name').addClass('is-invalid');
            $('#caption_name~span').text('कृपया फोटो का मुख्य शीर्षक दर्ज करें');
            flag = false;
        }else{
            $('#caption_name').removeClass('is-invalid');
            $('#caption_name~span').text('');
        }

        if($('#customFile').val() == '' || $('#customFile').val() == 0){
            $('#customFile').addClass('is-invalid');
            $('#customFile~span').text('कृपया फोटो अपलोड करें');
            flag = false;
        }else{
            $('#customFile').removeClass('is-invalid');
            $('#customFile~span').text('');
        }

        if(flag == false){
            e.preventDefault();
        }else{
            return true;
        }
    });
 </script>
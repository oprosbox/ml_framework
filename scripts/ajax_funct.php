<?php require_once './library/functions.php';?>

<script>
    
function msg_get(teg_id,msg) {
        $('#' + teg_id).html(msg);
    }

    function get_ajax(array_param_val, php_local, teg_result)
    {
        var str_address = '<?php echo get_home_url() ?>' + '/' + php_local;
        var str_params = '';
        for (var i = 0; i < array_param_val.length; i++)
        {
            str_params += array_param_val[i].param + '=' + array_param_val[i].value + '&';
        }
        $("#" + teg_result).load(str_address, str_params);
    }

    function post_ajax(form_id, php_local, teg_success_id)
    {
        var fm_data = new FormData($('#' + form_id)[0]);
        $.ajax({
            url: '<?php echo get_home_url() ?>' + '/' + php_local,
            data: fm_data,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (msg) {
                msg_get(teg_success_id, msg);
            }
        });
    }

</script>

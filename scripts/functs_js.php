<?php require_once 'ajax_funct.php'; ?>

<script>
$( document ).ready(function(){
$('#btn_post').on('click', function () {
            post_ajax('form_send', 'controller/redact_comm.php', 'item-center-right');
        })
    });

</script>


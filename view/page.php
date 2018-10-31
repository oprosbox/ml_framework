<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php require_once './library/functions.php'; 
        require_once './config.php';?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Заголовок</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_home_url() ?>/css/media.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_home_url() ?>/css/styles.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_home_url() ?>/library/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo get_home_url() ?>/library/jquery/jquery.js"></script>
        <?php include './scripts/functs_js.php' ?> 
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        
        <div class="container">     
            <?php
            include 'page/header.php';
            include 'page/left.php';
            include 'page/center.php';
            include 'page/right.php';
            include 'page/footer.php';
            ?>
        </div> 
        
    </body>
    </html>
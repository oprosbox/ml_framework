<?php
require_once 'functions/directory_functs.php';
require_once 'functions/file_functs.php';
require_once 'functions/receive_file.php';
require_once 'functions/get_post.php';

function get_home_url() {
    $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
    return ($protocol . $_SERVER['HTTP_HOST']);
}






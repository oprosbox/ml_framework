<?php
require_once 'cpu.php';

$url = WCPU::get_address($_SERVER['REQUEST_URI']);

include $url;

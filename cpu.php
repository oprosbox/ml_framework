<?php
 

class WCPU {

    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public static $s_address = array('head' => 'view/page.php',
        'error_404' => 'errors/404.php');

    static protected function bad_simbols($string) {
        if (preg_match("/([^a-zA-Z0-9\.\/\-\_\#])/", $string)) {
            return true;
        }
        return false;
    }

    public static function get_address($url) {
        $url = trim($url, '/'); //удаляем первый и последний slesh.
        if (WCPU::bad_simbols($url)) {
            return WCPU::$s_address['error_404'];
        }
        if ($url === "") {
            return WCPU::$s_address['head'];
        }
        foreach (WCPU::$s_address as $key_arr => $key_val) {
            if ($key_arr === $url) {
                return $key_val;
            }
        }
        return WCPU::$s_address['error_404'];
    }

}

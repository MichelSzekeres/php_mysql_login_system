<?php
class page{
    public static function isSSL(){
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? true : false);
    }
    public static function full_url(){
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
    public static function url(){
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
    }
    public static function is_index(){
        if(!defined('index') || index != true){ include('../view/error/404.php'); }
    }
    public static function is_domain($domain){
        #check is variable matches the host network domain
        return ($_SERVER['HTTP_HOST'] == $domain);
    }
    public static function is_request_index($index,$domain){
        if(!$index || $domain){header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);die();}
    }
    public static function sanitize_output($data){
        $search = array(
            '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
            '/[^\S ]+\</s',     // strip whitespaces before tags, except space
            '/(\s)+/s',         // shorten multiple whitespace sequences
            '/<!--(.|\s)*?-->/' // Remove HTML comments
        );
    
        $replace = array('>','<','\\1','');
    
        $data = preg_replace($search, $replace, $data);
    
        return $data;
    }
    public static function error(){
        include('../view/error/404.php');
    }
    public static function path(){
        return $_SERVER['REQUEST_URI'];
    }
    public static function header(){
        include('../view/part/header.php');
    }
    public static function footer(){
        include('../view/part/footer.php');
    }
    public static function meta(){
        include('../view/part/meta.php');
    }
    public static function style(){
        include('../view/part/style.php');
    }
    public static function javascript(){
        include('../view/part/javascript.php');
    }
}

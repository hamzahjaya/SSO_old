<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('get_hash')){
    function get_hash($PlainPassword){
        $option=[
                'cost'=>5,
    	        ];
    	return password_hash($PlainPassword, PASSWORD_DEFAULT, $option);
   }
}

if(!function_exists('hash_verified')){
    function hash_verified($PlainPassword,$HashPassword){
    	return password_verify($PlainPassword,$HashPassword) ? true : false;
   }
}
function konfigurasi($title, $c_des=null)
{
    $CI = get_instance();
    $CI->load->model('Konfigurasi_model');
    $site = $CI->Konfigurasi_model->listing();
    $data = array(
      'title'        => $title.' | '.$site['nama_website'],
      'logo'         => $site['logo'],
      'favicon'      => $site['favicon'],
      
      'site'         => $site,
      'c_judul'      => $title,
      'c_des'        => $c_des,
    );
    return $data;
}
?>
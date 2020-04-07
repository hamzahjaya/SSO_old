<?php

defined('BASEPATH') OR exit('No direct script access allowed');


function log_activity($aksi, $akses_menu = null, $item = null, $ket_item = null){
    $CI =& get_instance();
    $CI->load->model('m_log_activity');
    $data = array(
        'id_user'       => $CI->session->userdata('id_user'),
        'aksi'          => $aksi,
        'akses_menu'    => $akses_menu,
        'item'          => $item,
        'ket_item'      => $ket_item,
        'ip'            => getIpAddress()
    );
    $CI->m_log_activity->simpan_data($data);
}

?>
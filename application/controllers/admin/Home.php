<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
       

        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Dashboard | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );

        $this->load->helper('string');
        $this->template->load('layouta/template', 'admin/dashboard', $data);
    }


    
    
}

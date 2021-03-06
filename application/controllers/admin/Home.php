<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
       

        $this->check_login();
        if ($this->session->userdata('role') != "admin") {
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
        // $this->load->library('user_agent');

        // $data['browser'] = $this->agent->browser();
      
        // $data['browser_version'] = $this->agent->version();
      
        // $data['os'] = $this->agent->platform();
      
        // $data['ip_address'] = $this->input->ip_address();
        
        // var_dump ($data);
        // die;
        $this->load->helper('string');
        $this->template->load('layouta/template', 'admin/dashboard', $data);
       

    }


    
    
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_global");
        $this->load->helper('url');
        $this->load->library('form_validation');
	}       

		public function index()
		{
			if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
			$data['t_master_aplikasi'] = $this->m_global->aplikasi()->result();
			// $this->load->view('layout/template','member/aplikasi/listapp', $data);
		$this->template->load('layout/template', 'member/aplikasi/listapp', $data);
		}

		
		


		

}




?>
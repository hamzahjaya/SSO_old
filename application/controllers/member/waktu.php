<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Waktu extends CI_Controller
{

	    public function __construct()

        
    {
        parent::__construct();
        $this->load->model("m_global");
        $this->load->library('form_validation');
      
	}       

		public function index()
		{
			$where['id_user'] =$_SESSION['id_user'];
			$data['t_user'] = $this->m_global->get('*','t_user',$where );
			// print_r($data['t_user']);die;

			$this->template->load('layout/template', 'member/waktu', $data);
		
		}

		
		public function simpan (){
		$input['username']  = $this->input->post('username');
		$input['email']  = $this->input->post('email');
		$input['password']  = md5($this->input->post('password'));
        $input['nama']      = $this->input->post('nama');
        $input['no_sk']      = $this->input->post('no_sk');
        $input['nik']      = $this->input->post('nik');
        $input['nip']      = $this->input->post('nip');

       
        $input['id_role']      = "2";
       

        $simpan = $this->m_global->input_data($input,'t_user');

        $this->session->set_flashdata('success','User Berhasil Ditambahkan!');
        redirect(base_url('member/user'));
		}

		

	

}




?>
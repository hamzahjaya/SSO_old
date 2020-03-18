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
			$data['t_master_aplikasi'] = $this->m_global->aplikasi()->result();
			// $this->load->view('layout/template','member/aplikasi/listapp', $data);
		$this->template->load('layout/template', 'member/aplikasi/listapp', $data);
		}

		
		function tambah()
		{
			$this->load->view('layout/template','member/aplikasi/listapp');
		}
		function tambah_aplikasi()
		{
			$id_aplikasi = $this->input->post('id_aplikasi');
			$nama_aplikasi = $this->input->post('nama_aplikasi');
			$token_aplikasi = $this->input->post('token_aplikasi');

			$data = array('id_aplikasi' =>$id_aplikasi ,
			'nama_aplikasi' =>$nama_aplikasi ,
			'token_aplikasi' =>$token_aplikasi , );
			$this->m_global->input_data($data,'t_master_aplikasi');
			redirect('member/aplikasi');
		}
		function prosesTambah()
		{
			$input['id_aplikasi'] = $this->input->post('id_aplikasi');
			$input['nama_aplikasi']= $this->input->post('nama_aplikasi');
			$input['token_aplikasi']= $this->input->post('token_aplikasi');
			$simpan = $this->m_global->input($input,'t_master_aplikasi');
			$this->session->set_flashdata('success','Aplikasi Berhasil Di Tambahkan!');
			redirect(base_url('member/aplikasi'));
		}

	  	


		

}




?>
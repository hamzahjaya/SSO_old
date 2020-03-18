<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

			$this->template->load('layout/template', 'member/user/list', $data);
		
		}

		public function add()
		{
			$user = $this->m_global;
			$validation = $this->form_validation;
			$validation->set_rules($user->rules());

			if($validation->run())
			{
				$user->save();
				$this->session->set_flashdata('succes','berhasil disimpan');

			}
			$this->template->load('layout/template', 'member/user/new_form');
		
		}
		public function simpan (){
		$input['username']  = $this->input->post('username');
		$input['email']  = $this->input->post('email');
		$input['no_hp']  = $this->input->post('no_hp');
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

		public function edit($id = null)
		{
		$where['id_user'] = $id;
        $data['user'] = $this->m_global->get('*','t_user',$where);
        $data['password'] = $this->m_global->get('*','t_user',$where);
        $data['nama'] = $this->m_global->get('*','t_user',$where);
        $data['no_sk'] = $this->m_global->get('*','t_user',$where);
        $data['nik'] = $this->m_global->get('*','t_user',$where);
        $data['nip'] = $this->m_global->get('*','t_user',$where);
        // $this->load->view('member/user/edit',$data);
        // $this->template->load('layout/template', $data);
		$this->template->load('layout/template', 'member/user/edit',$data);
		

		}
		public function update ($id_user = null){
		$input['username']  = $this->input->post('username');
		$input['email']     = $this->input->post('email');
        $input['nama']      = $this->input->post('nama');
        $input['no_sk']     = $this->input->post('no_sk');
        $input['nik']      	= $this->input->post('nik');
        $input['nip']      	= $this->input->post('nip');

        $id_user = stripslashes(strip_tags(htmlspecialchars($id_user, ENT_QUOTES)));
// print_r($input);die;
       

        $update = $this->m_global->update($input,  array('id_user' => $id_user ),'t_user');


        $this->session->set_flashdata('success','User Berhasil Ditambahkan!');
        redirect(base_url('member/user'));
		}

		public function hapus($id)
		{
			$where['id_user'] = $this->input->post('id');
			$hapus = $this->m_global->hapus('t_user',$where);
			if (count($hapus)>0)
			{
				$res = 'sukses';
			}
			else 
			{
				$res = 'gagal';
			}
			echo json_encode($res);
			 $hapus = $this->m_global->input($input,'t_user');

        	$this->session->set_flashdata('success','User Berhasil Dihapus!');
       		 redirect(base_url('member/user'));
			// if ($this->m_global->hapus($id) == TRUE ){
			// 	$this->session->set_flashdata('hapus',TRUE);
			// }
			// else {
			// 	$this->session->set_flashdata('hapus', FALSE);
			// }
			// redirect(base_url('member/user',$data));
		}

	

}




?>
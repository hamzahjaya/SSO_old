<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	    public function __construct()

        
    {
        parent::__construct();
        $this->load->model("m_global");
        $this->load->model('log_model');
        $this->load->library('form_validation');
        $this->load->helper(array('url','form'));
      
	}       

		public function index()
		{
			
			if ($this->session->userdata('role') != "user") {
            redirect('', 'refresh');
        }
			$where['id_user'] =$_SESSION['id_user'];
			$data['t_user'] = $this->m_global->get('*','t_user',$where );
			// print_r($data['t_user']);die;

			$this->template->load('layout/template', 'member/user/list', $data);
		
		}
		public function editprofile($id = null)
		{
			if ($this->session->userdata('role') != "user") {
				redirect('', 'refresh');
			}
			
            $data = konfigurasi('Profile');
            $data['get_all_userdata'] = $this->m_global->get('*','t_user',array('id_user' => $_SESSION['id_user'] ));    
    
		$where['id_user'] = $id;
        $data['user'] = $this->m_global->get('*','t_user',$where);
        $data['password'] = $this->m_global->get('*','t_user',$where);
        $data['nama'] = $this->m_global->get('*','t_user',$where);
        $data['no_sk'] = $this->m_global->get('*','t_user',$where);
        $data['nik'] = $this->m_global->get('*','t_user',$where);
        $data['nip'] = $this->m_global->get('*','t_user',$where);
        // $this->load->view('member/user/edit',$data);
        // $this->template->load('layout/template', $data);
		$this->template->load('layout/template', 'member/user/profile',$data);
		

		}

		public function updateprofile ($id_user = null){


		$input['username']  = $this->input->post('username');
		$input['email']     = $this->input->post('email');
        $input['nama']      = $this->input->post('nama');
        $input['no_sk']     = $this->input->post('no_sk');
		$input['nik']      	= $this->input->post('nik');
		$input['no_hp']      	= $this->input->post('no_hp');
        $input['nip']      	= $this->input->post('nip');

        $id_user = stripslashes(strip_tags(htmlspecialchars($id_user, ENT_QUOTES)));
		// print_r($input);die;
       

        $update = $this->m_global->update($input,  array('id_user' => $id_user ),'t_user');


        $this->session->set_flashdata('success','User Berhasil diubah!');
        redirect(base_url('member/user'));
		}

	public function updatepassword ($id_user = null){
        

				$input['password']  = md5($this->input->post('password'));
			   
		
				$id_user = stripslashes(strip_tags(htmlspecialchars($id_user, ENT_QUOTES)));
				// print_r($input);die;
			   
		
				$update = $this->m_global->update($input,  array('id_user' => $id_user ),'t_user');
		
		
				$this->session->set_flashdata('success','password Berhasil diubah');
				redirect(base_url('member/user'));
	} 
   public function log(){
    // $limit = 10;
    $data['log'] = $this->log_model->logaktifitas();
    //pagination
    // $config['base_url'] = site_url('admin/log/index');
    // $config['total_rows'] = $this->log_model->get_count_log();
    // $config['per_page'] = 10;
		//Bootstrap 4 Pagination fix
		
       
         $this->template->load('layout/template', 'member/logaktifitas', $data);
    }

}

	





?>	
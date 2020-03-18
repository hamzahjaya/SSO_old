<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->helper(array('url','form'));

    }


    public function index()
    {
        
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }

      $data['user'] = $this->user_model->get_user('id_user', $_SESSION['id_user']);
      
      $this->template->load('layouta/template', 'admin/register', $data);
       
    }  


    public function register()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[t_user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp','No_hp','required');
        $this->form_validation->set_rules('no_sk', 'No_sk', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('nip', 'Nip', 'required');

        if ($this->form_validation->run() === false) {
           
            $this->template->load('layouta/template', 'admin/register', $data);

        } else {

            //input data ke table
            $this->user_model->reg();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $this->send_email_verification($this->input->post('email'), $_SESSION['token']);
           
            redirect('admin/user');
            
		}
    }
    

    public function send_email_verification($email, $token)
    {
        $this->load->library('email');
        $this->email->from('hamzahjayaputrah@Gmail.com', 'Admin SSO');
        $this->email->to($email);
        $this->email->subject('Aktivasi akun anda');
        $this->email->message("
                    Klik untuk Aktivasi Akun
                    <a href='http://localhost/sso_kpu/verify/$email/$token'>Aktivasi Akun</a>
                    

                    <B><i>Harap agar password anda di ubah </i></b>
                    ");
        $this->email->set_mailtype('html');
        $this->email->send();
    }

    public function verify_register($email, $token)
    {
        $user = $this->user_model->get_user('email', $email);

        //cek email ada atau tidak
        if(!$user)
          die('email not exists');

         if($user['token'] !== $token)
          die('token not match');

          //update user role
          $this->user_model->update_active($user['id_user'], 1);

          //set session
         
          $_SESSION['id_user'] = $user['id_user'];
          $_SESSION['logged_in'] = true;

          //redirect profile
          redirect('admin/user');
    }

    public function list()
    {
        
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        
        $data["t_user"] = $this->user_model->getAll();
        $this->template->load('layouta/template', 'admin/listuser', $data);
    }

    public function deleteuser($id_user = null)
    {
        if (!isset($id_user)) show_404();
        
        if ($this->user_model->deleteuser($id_user)) {
            redirect(site_url('admin/user/list'));
        }
    }


    public function aplikasi()
    {
       
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $data['user'] = $this->user_model->get_user('id_user', $_SESSION['id_user']);
      
     
        $this->template->load('layouta/template', 'admin/aplikasi', $data);
    }

    public function tambahapp()
    {

        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->form_validation->set_rules('nama_aplikasi', 'Nama_aplikasi', 'required');
        $this->form_validation->set_rules('token_aplikasi', 'Token_aplikasi');
       

        if ($this->form_validation->run() === false) {
           
            $this->template->load('layouta/template', 'admin/aplikasi');

        } else {

            //input data ke table
            
            $this->user_model->app();
            $this->session->set_flashdata('success', 'Berhasil disimpan');

            redirect('admin/user/aplikasi');
            
		}
    }

        public function listapp()
        {
       
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        
        $data["t_master_aplikasi"] = $this->user_model->lihatapp();
    
        $this->template->load('layouta/template', 'admin/listapp', $data);
    }

    //download token
    public function download($id_aplikasi)
    {

    $this->load->helper('download');
    $fileinfo = $this->user_model->download($id_aplikasi);
    $file = 'upload/'.$fileinfo['token_aplikasi'];
    force_download($file, NULL);

    

    }

    public function edit($id_aplikasi = null)
    {

       
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        if (!isset($id_aplikasi)) redirect('admin/listapp');
       
        $aplikasi = $this->user_model;

        $this->form_validation->set_rules('nama_aplikasi', 'Nama_aplikasi');
        $this->form_validation->set_rules('token_aplikasi', 'Token_aplikasi');

        if ($this->form_validation->run()) {
            
        $aplikasi->updateapp();
        $this->session->set_flashdata('success', 'Berhasil diubah');

        }

        $data["t_master_aplikasi"] = $this->user_model->getbyid($id_aplikasi);
    
        $this->template->load('layouta/template', 'admin/editapp', $data);
    }

    public function deleteapp($id_aplikasi =null)
    {
        if (!isset($id_aplikasi)) show_404();
        
        if ($this->user_model->deleteapp($id_aplikasi)) {
            redirect(site_url('admin/user/listapp'));
        }
    }

    public function admin($id_user = null)
    {

       
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        if (!isset($id_user)) redirect('admin/profile');
       
        $user = $this->user_model;

        $this->form_validation->set_rules('nama_aplikasi', 'Nama_aplikasi');
        $this->form_validation->set_rules('token_aplikasi', 'Token_aplikasi');

        if ($this->form_validation->run()) {
            
        $user->updateuser();
        $this->session->set_flashdata('success', 'Berhasil diubah');

        }

        $data["t_user"] = $this->user_model->getbyuser($id_user);
    
        $this->template->load('layouta/template', 'admin/edituser', $data);
    }
    



}
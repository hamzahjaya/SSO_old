<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        
        $this->load->model('user_model');
        $this->load->model('log_model');
        $this->load->library('form_validation');
        $this->load->helper(array('url','form'));

    }


    public function index()
    {
        
        if ($this->session->userdata('role') != "admin") {
            redirect('', 'refresh');
        }

      $data['user'] = $this->user_model->get_user('id_user', $_SESSION['id_user']);
    //   var_dump($data['id_user']);die;
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
            $this->send_email_verification($this->input->post('email'), $_SESSION['token'],$this->input->post('password'));
           
            redirect('admin/user');
            
		}
    }

    public function kirimtoken()
    {
        
        // $data['user'] = $this->user_model->get_user('id_user', $_SESSION['id_user']);
        $data['user'] = $this->user_model->usertoken();
        $this->template->load('layouta/template', 'admin/kirimtoken', $data);
        
    }
    
    public function sendtoken()
    {
        $data['user'] = $this->user_model->usertoken();
        
        $email = $this->input->post('email');
        $nama_aplikasi = $this->input->post('nama_aplikasi');
        $token_aplikasi = $this->input->post('token_aplikasi');
        


 
		$data = array(
			'email' => $email,
            'nama_aplikasi' => $nama_aplikasi,
            'token_aplikasi' => $token_aplikasi
            );
            $this->session->set_flashdata('berhasil', 'Berhasil dikirim');
            $this->emailtoken($this->input->post('email'),$this->input->post('nama_aplikasi'),$this->input->post('token_aplikasi'));
            redirect('admin/user/kirimtoken','refresh');
            
           
		// $this->m_data->input_data($data,'user')
    }

    
    public function emailtoken($email,$nama_aplikasi,$token_aplikasi)
    {
        $this->load->library('email');
        $this->email->from('ssokpu2020@gmail.com', 'Admin SSO');
        $this->email->to($email);
        $this->email->subject('Permintaan token aplikasi');
        $this->email->message('Dear : <b>'.$email. 
        '</b><br>Berikut saya kirim kan token aplikasi : <b>'.$nama_aplikasi.'</b><br>
        ');
        $this->email->set_mailtype('html');
        $this->email->send();
    }
    public function send_email_verification($email, $token, $password)
    {
        $this->load->library('email');
        $this->email->from('ssokpu2020@gmail.com', 'Admin SSO');
        $this->email->to($email);
        $this->email->subject('Akun sso anda');
        $this->email->message('Dear  <b>'.$email. '</b>
        <br> Password anda adalah : '.$password. '<br>
        silahkan ubah password anda
        ');
        $this->email->set_mailtype('html');
        $this->email->send();
    }

    public function verify_register($email, $token)
    {
         if ($this->session->userdata('role') != "admin") {
            redirect('', 'refresh');
        }

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
        
        if ($this->session->userdata('role') != "admin") {
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
       
        if ($this->session->userdata('role') != "admin") {
            redirect('', 'refresh');
        }
        $data['t_user'] = $this->user_model->get_user('id_user', $_SESSION['id_user']);
      
     
        $this->template->load('layouta/template', 'admin/aplikasi', $data);
    }

    public function tambahapp()
    {

        if ($this->session->userdata('role') != "admin") {
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
       
        if ($this->session->userdata('role') != "admin") {
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
    $file = 'download/'.$fileinfo['token_aplikasi'];
    force_download($file, NULL);

    echo $file;
    die;
    }
    //edit aplikasi
    public function edit($id = null)
    {

        if ($this->session->userdata('role') != "admin") {
            redirect('', 'refresh');
        }
      
    $where['id_aplikasi'] = $id;
    $data['aplikasi'] = $this->user_model->get('*','t_master_aplikasi',$where);
    $data['token_aplikasi'] = $this->user_model->get('*','t_master_aplikasi',$where);
   
    $this->template->load('layouta/template', 'admin/editapp',$data);
    

    }

    public function updatetoken ($id_aplikasi = null){
        

        $this->load->helper('string');
        $_SESSION['token_aplikasi'] = random_string('alnum', 90);

        $input['token_aplikasi']      	= $_SESSION['token_aplikasi'];

        $id_aplikasi = stripslashes(strip_tags(htmlspecialchars($id_aplikasi, ENT_QUOTES)));
		// print_r($input);die;
       

        $update = $this->user_model->updatetoken($input,  array('id_aplikasi' => $id_aplikasi ),'t_master_aplikasi');


        $this->session->set_flashdata('success','Token Berhasil diubah');
        redirect(base_url('admin/user/listapp'));
		}



    public function deleteapp($id_aplikasi =null)
    {
        if (!isset($id_aplikasi)) show_404();
        
        if ($this->user_model->deleteapp($id_aplikasi)) {
            redirect(site_url('admin/user/listapp'));
        }
    }


    public function editadmin($id = null)
		{
         if ($this->session->userdata('role') != "admin") {
                redirect('', 'refresh');
            }
        
            $data = konfigurasi('Profile');
            $data['get_all_userdata'] = $this->user_model->get('*','t_user',array('id_user' => $_SESSION['id_user'] ));    
    
        $where['id_user'] = $id;
        $data['user'] = $this->user_model->get('*','t_user',$where);
        $data['password'] = $this->user_model->get('*','t_user',$where);
        $data['email'] = $this->user_model->get('*','t_user',$where);
        $data['nama'] = $this->user_model->get('*','t_user',$where);
        $data['no_hp'] = $this->user_model->get('*','t_user',$where);
        $data['no_sk'] = $this->user_model->get('*','t_user',$where);
        $data['nik'] = $this->user_model->get('*','t_user',$where);
        $data['nip'] = $this->user_model->get('*','t_user',$where);
        // $this->load->view('member/user/edit',$data);
        // $this->template->load('layout/template', $data);
		$this->template->load('layouta/template', 'admin/edituser',$data);
		

		}
		public function updateadmin ($id_user = null){
        
        $input['username']  = $this->input->post('username');
        $input['password']  = md5($this->input->post('password'));
        $input['email']     = $this->input->post('email');
        $input['nama']      = $this->input->post('nama');
        $input['no_hp']      = $this->input->post('no_hp');
        $input['no_sk']     = $this->input->post('no_sk');
        $input['nik']      	= $this->input->post('nik');
        $input['nip']      	= $this->input->post('nip');

        $id_user = stripslashes(strip_tags(htmlspecialchars($id_user, ENT_QUOTES)));
		// print_r($input);die;
       

        $update = $this->user_model->updateadmin($input,  array('id_user' => $id_user ),'t_user');


        $this->session->set_flashdata('success','User Berhasil diubah');
        redirect(base_url('admin/user'));
		}

        public function updatepassword ($id_user = null){
        

            $input['password']  = md5($this->input->post('password'));
           
    
            $id_user = stripslashes(strip_tags(htmlspecialchars($id_user, ENT_QUOTES)));
            // print_r($input);die;
           
    
            $update = $this->user_model->updateadmin($input,  array('id_user' => $id_user ),'t_user');
    
    
            $this->session->set_flashdata('success','password Berhasil diubah');
            redirect(base_url('admin/user'));
            }      
        
    public function edituser($id = null)
    {
     if ($this->session->userdata('role') != "admin") {
            redirect('', 'refresh');
        }
      
    $where['id_user'] = $id;
    $data['user'] = $this->user_model->get('*','t_user',$where);
    $data['password'] = $this->user_model->get('*','t_user',$where);
    $data['email'] = $this->user_model->get('*','t_user',$where);
    $data['nama'] = $this->user_model->get('*','t_user',$where);
    $data['no_hp'] = $this->user_model->get('*','t_user',$where);
    $data['no_sk'] = $this->user_model->get('*','t_user',$where);
    $data['nik'] = $this->user_model->get('*','t_user',$where);
    $data['nip'] = $this->user_model->get('*','t_user',$where);
    // $this->load->view('member/user/edit',$data);
    // $this->template->load('layout/template', $data);
    $this->template->load('layouta/template', 'admin/editlist',$data);
    

    }
    public function updateuser ($id_user = null){
    
    $input['username']  = $this->input->post('username');
    $input['password']  = md5($this->input->post('password'));
    $input['email']     = $this->input->post('email');
    $input['nama']      = $this->input->post('nama');
    $input['no_hp']      = $this->input->post('no_hp');
    $input['no_sk']     = $this->input->post('no_sk');
    $input['nik']      	= $this->input->post('nik');
    $input['nip']      	= $this->input->post('nip');

    $id_user = stripslashes(strip_tags(htmlspecialchars($id_user, ENT_QUOTES)));
    // print_r($input);die;
   

    $update = $this->user_model->updateadmin($input,  array('id_user' => $id_user ),'t_user');


    $this->session->set_flashdata('success','User Berhasil diubah');
    redirect(base_url('admin/user/list'));
    }

    public function lihatmintapassword()
    {
   
    if ($this->session->userdata('role') != "admin") {
        redirect('', 'refresh');
    }
    
    $data["hasil"] = $this->user_model->lihatmintapassword();

    $this->template->load('layouta/template', 'admin/lihatmintapassword', $data);
}


public function log(){
    // $limit = 10;
    $data['log'] = $this->log_model->logaktifitas();
    //pagination
    // $config['base_url'] = site_url('admin/log/index');
    // $config['total_rows'] = $this->log_model->get_count_log();
    // $config['per_page'] = 10;
		//Bootstrap 4 Pagination fix
		
       
         $this->template->load('layouta/template', 'admin/logaktifitas', $data);
    }

}
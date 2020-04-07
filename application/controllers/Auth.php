<?php defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Auth_model');
        $this->load->model('m_global');

    }

    public function testinglogin()
    {
        $user = $this->input->get('u');
        $pass = $this->input->get('p');

        $respone = array(
            'nama_user' => $user,
            'password' => $pass
        );

        echo json_encode($respone);
    }

    public function check_account()
    {
        //validasi login
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        //ambil data dari database untuk validasi login
        $query = $this->Auth_model->check_account($email, $password);

        if ($query === 1) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
        			<div class="info-box alert-danger">
        			<div class="info-box-icon">
        			<i class="fa fa-warning"></i>
        			</div>
        			<div class="info-box-content" style="font-size:14">
        			<b style="font-size: 20px">GAGAL</b><br>Email yang Anda masukkan tidak terdaftar.</div>
        			</div>
        			</p>
            ');
        } elseif ($query === 2) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
              <div class="info-box alert-info">
              <div class="info-box-icon">
              <i class="fa fa-info-circle"></i>
              </div>
              <div class="info-box-content" style="font-size:14">
              <b style="font-size: 20px">GAGAL</b><br>Akun yang Anda masukkan tidak aktif, silakan hubungi Administrator.</div>
              </div>
              </p>'
            );
        } elseif ($query === 3) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
        			<div class="info-box alert-danger">
        			<div class="info-box-icon">
        			<i class="fa fa-warning"></i>
        			</div>
        			<div class="info-box-content" style="font-size:14">
        			<b style="font-size: 20px">GAGAL</b><br>Password yang Anda masukkan salah.</div>
        			</div>
        			</p>
              ');
        } else {
            //membuat session dengan nama userData yang artinya nanti data ini bisa di ambil sesuai dengan data yang login
            $userdata = array(
              'is_login'    => true,
              'id_user'     => $query->id_user,
              'password'    => $query->password,
              'id_role'     => $query->id_role,
              'username'    => $query->username,
              'email'       => $query->email,
              'token'       => $query->token,
              'ip'          => $query->ip,
              'nama'        => $query->nama,
              'no_sk'       => $query->no_sk,
              'nik'         => $query->nik,
              'nip'         =>  $query->nip,
              'no_hp'       => $query->no_hp,
              'last_login'  =>$query->last_login
                          
            );
            $this->session->set_userdata($userdata);
            return true;
        }
    }
    // public function sendMail(){
    // $this->load->library('email');
    // $this->email->from('your@example.com', 'Your Name');
    // $this->email->to('someone@example.com');
    // $this->email->cc('another@another-example.com');
    // $this->email->bcc('them@their-example.com');
    // $this->email->subject('Email Test');
    // $this->email->message('Testing the email class.');
    // $this->email->send('email');

    // }
    public function sendMail() 
    {   
        $username = stripslashes(strip_tags(htmlspecialchars($this->input->post('username'), ENT_QUOTES)));
        $email = stripslashes(strip_tags(htmlspecialchars($this->input->post('email'), ENT_QUOTES)));
        $password = stripslashes(strip_tags(htmlspecialchars($this->input->post('password'), ENT_QUOTES)));

        $where['username']          = $username;
        $where['email']        = $email;

        $user = $this->m_global->get('*','t_user', $where);
        
            if($user){
                $config = [
                    'mailtype'  => 'html',
                    'charset'   => 'iso-8859-1',
                    'protocol'  => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                   'smtp_user' => 'hamzahjayaputrah@Gmail.com',    // Ganti dengan email gmail kamu
                   'smtp_pass' => 'Erliza12',      // Password gmail kamu
                   'smtp_port' => 465,
                   'crlf'      => "\r\n",
                   'newline'   => "\r\n"
               ];

               $this->load->library('email', $config);
               $this->email->from('hamzahjayaputrah@Gmail.com', 'Uji Coba Email KPU');
               $this->email->to($where['email']);
               $this->email->subject('Email Test');
               $this->email->message('Password SIMPAW : '.$password);
               $this->email->send();
                // echo "cocok";

                if ($password) {
                    $where['username']      = $where['username'];
                    $where['email']    = $where['email'];

                    $data['password']      = md5($password);
                    $simpan = $this->m_global->update($data,array('email' => $where['email'], 'username' => $where['username']),'t_user');
                    $this->session->set_flashdata('success', 'Password Berhasil Diubah!');
                    redirect('auth/login');
                }else{
                    $this->session->set_flashdata('error','Password Gagal Diubah');
                    redirect(base_url('authen/Lupa/'));
                }
            $this->session->set_flashdata('success','Password Berhasil Diubah!');
               redirect(base_url('auth/login'));
            }else{
                $this->session->set_flashdata('error','Username dan Email Tidak Cocok!');
                redirect(base_url('authen/lupa/'));
                // echo "tidak cocok";
            }
    }

    public function login()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'     => 'Login | ',
            'favicon'   => $site['favicon'],
            'site'      => $site
        );
        //melakukan pengalihan halaman sesuai dengan levelnya
        if ($this->session->userdata('id_role') == "1") {
            redirect('admin/home');
        }
        if ($this->session->userdata('id_role') == "2") {
            redirect('member/home');
        }

                // print_r($this->input->post('email'));die;
        //proses login dan validasi nya
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('email', 'Email','required');
            $this->form_validation->set_rules('password', 'Password','required');
            $error = $this->check_account();

            if ($this->form_validation->run() && $error) {
                $data = $this->Auth_model->check_account($this->input->post('email'), $this->input->post('password'));
                
                //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
                if ($data->id_role == '1') {
                    redirect('admin/home');
                } elseif ($data->id_role == '2') {
                    redirect('member/home');
                }
            } else {
               
                $this->template->load('authentication/layout/template', 'authentication/login', $data);
            }
        } else {
            $this->template->load('authentication/layout/template', 'authentication/login', $data);
        }
    }

    
    
    public function ganti_password()
    {
     
     
        $username = $this->session->userdata['username'];

        $this->form_validation->set_rules('pw_baru','password baru','required');
        $this->form_validation->set_rules('cpw_baru','password kedua','required|matches[pw_baru]');

        $this->form_validation->set_message('required','%s wajib diisi');

        $this->form_validation->set_error_delimiters('<p class="alert">','</p>');

        if( $this->form_validation->run() == FALSE ){
            $this->load->view('member/user/ganti_password');
        } else {
            $post = $this->input->post();
            
            $data = array(
                'password' => md5($post['pw_baru']),
            );

            $this->Post_model->update($username, $data['password'], 't_user');

        }
    }
    public function profile()
    {
        $data = konfigurasi('Profile');
        $data['get_all_userdata'] = $this->m_global->get('*','t_user',array('id_user' => $_SESSION['id_user'] ));
        $this->template->load('layout/template', 'authentication/profile', $data);
    }

    public function updatePassword()
    {
        $this->form_validation->set_rules('passLama', 'Password Lama', 'trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required|min_length[5]|max_length[25]');

        $id = $this->session->userdata('id');
        if ($this->form_validation->run() == true) {
            if (password_verify($this->input->post('passLama'), $this->session->userdata('password'))) {
                if ($this->input->post('passBaru') != $this->input->post('passKonf')) {
                    $this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
                    redirect('auth/profile');
                } else {
                    $data = ['password' => get_hash($this->input->post('passBaru'))];
                    $result = $this->Auth_model->update($data, $id);
                    if ($result > 0) {
                        $this->updateProfil();
                        $this->session->set_flashdata('msg', show_succ_msg('Password Berhasil diubah'));
                        redirect('auth/profile');
                    } else {
                        $this->session->set_flashdata('msg', show_err_msg('Password Gagal diubah'));
                        redirect('auth/profile');
                    }
                }
            } else {
                $this->session->set_flashdata('msg', show_err_msg('Password Salah'));
                redirect('auth/profile');
            }
        } else {
            $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
            redirect('auth/profile');
        }
    }

   
    public function logout()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $date = array('last_login' => date('Y-m-d H:i:s'));
        $id = $this->session->userdata('id_user');
        $this->Auth_model->logout($date, $id);
        $this->session->sess_destroy();
        redirect(base_url());
    }

   
    public function ubahprofile()
    {
        $this->load->view('authentication/profile');
    }

   

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GantiPassword extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('m_global');
    }
    
    private function logged_in()
    {
        if( ! $this->session->userdata('authentication')){
            redirect('auth/login');
        }
    }
    
    public function changePassword()
    {
        $this->logged_in();

        $data['title'] = 'Change Password';

        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldpass', 'old password', 'callback_password_check');
        $this->form_validation->set_rules('newpass', 'new password', 'required');
        $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if($this->form_validation->run() == false) {
            $this->load->view('header', $data);
            $this->load->view('member/change_password', $data);
            $this->load->view('footer', $data);
        }
        else {

            $id = $this->session->userdata('id');

            $newpass = $this->input->post('newpass');

            $this->users_model->update_user($id, array('password' => md5($newpass)));

            redirect('auth/logout');
        }
    }

    public function password_check($oldpass)
    {
        $id = $this->session->userdata('id');
        $user = $this->users_model->get_user($id);

        if($user->password !== md5($oldpass)) {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }

        return true;
    }
}
?> 
<?php

class User_Model extends CI_Model
{
    private $_table = 't_user';
    private $app    = 't_master_aplikasi';
    
        
    public function __construct()
    { 
        parent::__construct();
        
    }

    function get_client_ip() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function reg()
    { 
        $this->load->helper('string');
        $this->load->library('user_agent');

        $_SESSION['token'] = random_string('alnum', 30);

        $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'token'   => $_SESSION['token'],
                'id_role' => 2,
                'nama'  => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'no_sk' => $this->input->post('no_sk'),
                'nik'   => $this->input->post('nik'),
                'ip'    => $this->input->ip_address(),
                'nip'   => $this->input->post('nip')
        ];

        $this->db->insert('t_user', $data);
    }

    public function get_user($key, $value)
    {
        $query = $this->db->get_where('t_user', array($key=>$value));
        
        if(!empty($query->row_array())) {
            return $query->row_array();
        }

        return false;
    }
    
    public function update_active($id_user, $active_nr)
    {
        $data = array('active' => $active_nr);
        $this->db->where('id_user', $id_user);
        return $this->db->update('t_user', $data);
    }


    public function is_LoggedIn()
    {
        if(!isset($_SESSION['logged_in']))
        {
            return false;
        }
        return true;
    }


    public function checkPassword($email, $password)
    {
        $hash = $this->get_user('email', $email)['password'];
        if (password_verify($password, $hash))
        {
            return true;
        }

        return false;
    }

    public function getall()
    {
        return $this->db->get($this->_table)->result();
    }

    public function deleteuser($id_user)
    {
        return $this->db->delete($this->_table, array("id_user" => $id_user));
    }


    public function app()
    {

        $this->load->helper('string');
        $this->load->helper('form');
        
        $_SESSION['token_aplikasi'] = random_string('alnum', 90);

        $token_aplikasi['token_aplikasi'] = $this->input->get('token_aplikasi');
        $data = [
                'nama_aplikasi'  => $this->input->post('nama_aplikasi'),
                'token_aplikasi' => $_SESSION['token_aplikasi']
        ];
        $this->db->insert('t_master_aplikasi', $data);

        
    }


    public function lihatapp()
    {
        return $this->db->get($this->app)->result();
    }

    //download 
    public function download($id_aplikasi){

    $query = $this->db->get_where('t_master_aplikasi',array('id_aplikasi'=>$id_aplikasi));
     return $query->row_array();
    }

    public function getbyid($id_aplikasi)
    {
        
            return $this->db->get_where($this->app, ["id_aplikasi" => $id_aplikasi])->row();
        
    }
    
    public function getbyuser($id_user)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id_user])->row();
    }

    public function updateapp()
    {
       
        $this->load('helper');
        $this->load('form');

        $_SESSION['token_aplikasi'] = random_string('alnum', 90);


        $data = [
            'nama_aplikasi'  => $this->input->post('nama_aplikasi'),
            'token_aplikasi' => $_SESSION['token_aplikasi']
        ];

        return $this->db->update($this->app, $this, array('id_aplikasi' => $post['id_aplikasi']));
    }

    public function deleteapp($id_aplikasi)
    {
        return $this->db->delete($this->app, array("id_aplikasi" => $id_aplikasi));
    }

}
?>
<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public $table       = 't_user';
    public $id          = 't_user.id_user';

    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where('t_user', array('email'=>$email, 'password'=>$password));
        return $query->row_array();

    }
    
    //join token aplikasi
    public function login_api($email,$password,$token_aplikasi){

        $this->db->select('
         id_user,username,email,password,nama,role,token,nama_aplikasi,token_aplikasi
         ');
         $this->db->join('t_master_aplikasi', 't_master_aplikasi.id_aplikasi = t_master_aplikasi.id_aplikasi');
         $this->db->where('email', $email);
         $this->db->where('password', md5($password));
         $this->db->where('token_aplikasi', $token_aplikasi);
         $this->db->from($this->table);
         $query = $this->db->get();
         return $query->row();

        // $query = $this->db->query("SELECT * FROM `t_user` WHERE `email` = '$email' AND `password` = '$password'");
        //  return $query->result_array();
    }

    public function registration($data)
    {
        return $this->db->insert('t_user',$data);
    }
    public function verifyemail($key)
    {
        $data  = array('status' => 1 );
        $this->db->where('md5(email)',$key);
        return $this->db->update('t_user',$data);
    }

    public function check_account($email, $password)
    {
        //cari email lalu lakukan validasi
       
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get($this->table)->row();



        //jika bernilai 1 maka user tidak ditemukan
        if (!$query) {
            return 1;
        }
        //jika bernilai 2 maka user tidak aktif
        if ($query->active == 0) {
            return 2;
        }
        //jika bernilai 3 maka password salah
        /*if (!hash_verified($this->input->post('password'), $query->password)) {
            return 3;
        }*/
        return $query;
    }
    public function update ($data,$id)
    {
        $this->db->where($this->id,$id);
        $this->db->update($this->table, $data);
        return $this->db->affected_row();
    }
    public function get_by_id($id)
    {
        $this->db->select('
            t_user.*, role,
            ');
        $this->db->join('t_role', 't_user.id_role = t_role.id');
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function logout($date, $id)
    {
        $this->db->where('t_user.id_user', $id);
        $this->db->update('t_user', $date);
    }

    public function reg()
    {
        date_default_timezone_set('ASIA/JAKARTA');
        $data = array (
            'username' =>$this->input->post('username'),'email' =>$this->input->post('email'),'id_role'=>'2','created_on'=>date ('Y-m-d H:i:s'),'password'=>get_hash($this->input->post('password')));
        return $this->db->insert('t_user',$data);
    }
    public function get_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function update_user($id, $userdata)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $userdata);
    }
   
}

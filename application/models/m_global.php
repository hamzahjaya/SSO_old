<?php 
defined('BASEPATH') or exit ('No direct script allowed');

class M_global extends CI_Model
{
	private $_table = "t_user";

	public $id_user;
	public $id_role;
	public $username;
	public $password;
	public $token;
	public $last_login;
	public $last_logout;
	public $ip;
	public $nama;
	public $no_sk;
	public $nik;
	public $nip;
	public $no_hp;
	
	public function rules()
	{
		return [

				['field' => 'id_user',
				'label' => 'id_user',
				'rules' => 'required'],

				['field' => 'id_role',
				'label' => 'username',
				'rules' => 'required'],

				['field' => 'username',
				'label' => 'username',
				'rules' => 'required'],

				['field' => 'email',
				'label' => 'email',
				'rules' => 'required'],

				['field' => 'no_hp',
				'label' => 'no_hp',
				'rules' => 'required'],

				['field' => 'password',
				'label' => 'password',
				'rules' => 'required'],

			   ['field' => 'token',
			   	'label' => 'token',
			   	'rules' => 'required'],

			   	['field' => 'last_login',
				'label' => 'last_login',
				'rules' => 'required'],

				['field' => 'last_logout',
				'label' => 'last_logout',
				'rules' => 'required'],

				['field' => 'ip',
				'label' => 'ip',
				'rules' => 'required'],

			   ['field' => 'nama',
				'label' => 'nama',
				'rules' => 'required'],

				['field' => 'no_sk',
				 'label' => 'no_sk',
				 'rules' => 'required'],

				['field' => 'nik',
				 'label' => 'nik',
				 'rules' => 'required'],

				['field' => 'nip',
				 'label' => 'nip',
				 'rules' => 'required']

		];

	}
	

	public function getAll()
	{
		return $this->db->get($this->_table)->result();

	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_user" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_user = $_post['id_user'];
		$this->id_role = $_post['id_role'];
		$this->username = $_post['username'];
		$this->password = $_post['password'];
		$this->token = $_post['token'];
		$this->last_login = $_post['last_login'];
		$this->last_logout = $_post['last_logout'];
		$this->ip = $_post['ip'];
		$this->nama = $_post['nama'];
		$this->no_sk = $_post['no_sk'];
		$this->nik = $_post['nik'];
		$this->nip = $_post['nip'];

		return $this->db->insert($this->_table,$this);
	}


	public function update($data,$where,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
        return $this->db->affected_rows() > 0;
    }

	public function delete($id)
	{
		 $this->db->delete('t_user', array('id_user' => $id));
		 return ($this->db->affected_rows()> 0) ? TRUE : FALSE ;
	}

	public function aplikasi()
	{
		return $this->db->get('t_master_aplikasi');
	}
	public function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	public function lihat($id)
	{
		return $this->db->get('t_master_aplikasi');
	}

	//Start: method tambahan untuk reset code 
	public function get($select,$table,$where)
	 {
    	$this->db->select($select);
		$this->db->from($table);
		if ($where != '') 
		{
			$this->db->where($where);
		}
		$data_tampil = $this->db->get();
		return $data_tampil->result_array();
    }
	public function getUserInfo($id_user)  
	{  
	  $q = $this->db->get_where('t_user', array('id_user' => $id_user), 1);   
	  if($this->db->affected_rows() > 0){  
		$row = $q->row();  
		return $row;  
	  }else{  
		error_log('no user found getUserInfo('.$id_user.')');  
		return false;  
	  }  
	}  
	  
   
  	public function getUserInfoByEmail($email)
  	{  
     $q = $this->db->get_where('t_user', array('email' => $email), 1);   
     if($this->db->affected_rows() > 0)
     {  
       $row = $q->row();  
       return $row;  
     }  
   	}  
   
   	public function insertToken($id_user)  
   	{    
     $token = substr(sha1(rand()), 0, 30);   
     $date = date('Y-m-d');  
       
     $string = array(    
		 'id_user'=>$id_user,
		 'token_request' =>$token, 
         'request_time'=>$date  
       );  
     $query = $this->db->insert_string('t_log_request_password',$string);  
     $this->db->query($query);  
     return $token . $id_user;  
       
   	}  
   
	   public function isTokenValid($token)  
	   {  
		 $tkn = substr($token,0,30);  
		 $uid = substr($token,30);     
		   
		 $q = $this->db->get_where('t_log_request_password', array(  
		   't_log_request_password.token_request' => $tkn,   
		   't_log_request_password.id_user' => $uid), 1);               
			   
		 if($this->db->affected_rows() > 0){  
		   $row = $q->row();         
			  
			 
		   $user_info = $this->getUserInfo($row->id_user);  
		   return $user_info;  
			 
		 }else{  
		   return false;  
		 }  
		   
	   }     
   
    public function updatePassword($post)  
    {    
     $this->db->where('id_user', $post['id_user']);  
     $this->db->update('t_user', array('password' => $post['password']));      
     return true;  
	}
	  
     
}

?>
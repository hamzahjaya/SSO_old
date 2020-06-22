<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model
{
	protected $log = 't_log';
	
    function __construct(){
        parent::__construct();
    }
	
    /** Get log by id
	 *@param $id - primary key to get record
	 *
     */
    function get_log($id){
        $result = $this->db->get_where('t_log',array('id_user'=>$id))->row_array();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $result;
    } 
	
    /** Get all log
	 *
     */
    function get_all_log(){
        $this->db->order_by('id_user', 'desc');
        $result = $this->db->get('t_log')->result_array();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $result;
    }
	
	/** Get limit log
	 *@param $limit - limit of query , $start - start of db table index to get query
	 *
     */
    function get_limit_log($limit, $start){
		$this->db->order_by('id_log', 'desc');
        $this->db->limit($limit, $start);
        $result = $this->db->get('t_log')->result_array();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $result;
    }
	
    /** Count log rows
	 *
     */
	function get_count_log(){
       $result = $this->db->from("t_log")->count_all_results();
	   $db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $result;
    }
	
    /** function to add new log
	 *@param $params - data set to add record
	 *
     */
	function logaktifitas(){
	
		$this->db->select('*');
		
            return $this->db->from('t_master_aplikasi')
              ->join('t_log', 't_log.id_token_aplikasi=t_master_aplikasi.token_aplikasi')
              ->get()
			  ->result();
		
		// else {
		// 		$id_user =$_SESSION ['id_user'];
		// 		return $this->db->from('t_master_aplikasi')
        //       ->join('t_log', 't_log.id_token_aplikasi=t_master_aplikasi.token_aplikasi')
        //       ->join('t_user', 't_user.id_user=t_user.id_user')
              
        //       ->where('id_user',$id_user)
        //       ->get()
		// 	  ->result();
		// 	}	
	}

	function loguser(){
		$email = $_SESSION['email'];
		
		$this->db->select('*');
		return $this->db->from('t_master_aplikasi')
		->join('t_log','t_log.id_token_aplikasi=t_master_aplikasi.token_aplikasi')
		->join('t_user','t_user.email=t_user.email')
		->WHERE('t_user.email',$email)
		->get()
		->result();
	}

	function add_lognew($params)
	{
		
		if($this->db->insert('t_log',$params)){
			return true;

		} else {
			return false;
		}
	}
    // function add_log($params){
		
    //     $this->db->insert('t_log',$params);
    //     $id = $this->db->insert_id();
	// 	$db_error = $this->db->error();
	// 	if (!empty($db_error['code'])){
	// 		echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
	// 		exit;
	// 	}
	// 	return $id;
    // }
	
    /** function to update log
	 *@param $id - primary key to update record,$params - data set to add record
	 *
     */
    function update_log($id,$params){
        $this->db->where('id_user',$id);
        $status = $this->db->update('t_log',$params);
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $status;
    }
	
    /** function to delete log
	 *@param $id - primary key to delete record
	 *
     */
    function delete_log($id){
        $status = $this->db->delete('t_log',array('id_user'=>$id));
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		return $status;
    }
}

?>
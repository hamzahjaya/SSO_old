<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
   
    class User extends REST_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
            // $this->load->model('Auth_model');
            // $this->load->model('m_global');
        }
        // Get Data
        public function index_get() {
         
                $id_user = $this->get('id_user');
                if ($id_user == '') {
                    $user = $this->db->get('t_user')->result();
                } else {
                    $this->db->where('id_user', $id_user);
                    $user = $this->db->get('t_user')->result();
                }
                $this->response($user, 200);
            }
        }
      
    
?>
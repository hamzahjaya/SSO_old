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
            $this->load->model('Auth_model');
            // $this->load->model('m_global');
        }
        // Get Data
        // public function index_get() {
         
        //         $id_user = $this->get('id_user');
        //         if ($id_user == '') {
        //             $user = $this->db->get('t_user')->result();
        //         } else {
        //             $this->db->where('id_user', $id_user);
        //             $user = $this->db->get('t_user')->result();
        //         }
        //         $this->response($user, 200);
            
        //     }
            public function index_get() {
                // Get the post data
                
                
                $email = $this->get('email');
                $password = $this->get('password');
                $token_aplikasi = $this->get('token_aplikasi');
                
                // Validate the post data
                if(!empty($email) && !empty($password) && !empty($token_aplikasi) ){
                    
                    // Check if any user exists with the given credentials
                    
                    $user = array(
                        'email' => $email,
                        'password' => $password,
                        'token_aplikasi' => $token_aplikasi
                        
                    );
                    
                    $user = $this->Auth_model->login_api($email,$password,$token_aplikasi);
                    // $user = $this->user->getRows($con);
                    
                    if($user){
                        // Set the response and exit
                        $this->response([
                            'status' => TRUE,
                            'message' => 'User login successful.',
                            'data' => $user
                        ], REST_Controller::HTTP_OK);
                    }else{
                        // Set the response and exit
                        //BAD_REQUEST (400) being the HTTP response code
                        $this->response([
                            'status' => FALSE,
                            'message' => 'User login Gagal cek kembali.',
                            'data' => $user
                        ], REST_Controller::HTTP_OK);
                    }
                }else{
                    // Set the response and exit
                    $this->response("Provide email and password.", REST_Controller::HTTP_BAD_REQUEST);
                }
            }

        }
      
    
?>
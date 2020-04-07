 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
   
 class Lupa extends CI_Controller {  
   
      public function __construct()

        
    {
        parent::__construct();
         $this->load->model("m_global");
         $this->load->library('form_validation');
      }
   
     public function index()  
     {  
         
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');   
         
         if($this->form_validation->run() == FALSE) {  
             $data['title'] = 'Halaman Reset Password';  
             $this->load->view('authentication/Lupa',$data);  
         }else{  
             $email = $this->input->post('email');   
             $clean = $this->security->xss_clean($email);  
             $userInfo = $this->m_global->getUserInfoByEmail($clean);  
               
             if(!$userInfo){  
               $this->session->set_flashdata('sukses', 'email address salah, silakan coba lagi.');  
               redirect(site_url('auth/login'),'refresh');   
             }    
               
             //build token   
                       
             $token = $this->m_global->insertToken($userInfo->id_user);              
             $qstring = $this->base64url_encode($token);             
             
             $url = site_url() . 'authen/Lupa/reset_password/token/' . $qstring;  
             $link = '<a href="' . $url . '">' . $url . '</a>';   
             
             $this->load->library('email');
             $this->email->from('hamzahjayaputrah@Gmail.com', 'Admin SSO');
             
             $this->email->to($this->input->post('email'));
             $this->email->subject("Reset your password");
              $message = '';             
             $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                 password anda.</strong><br>';  
             $message .= '<strong>Silakan klik link ini:</strong> ' . $link;         
             $this->email->message($message);
             $this->email->send();
             
             
         }  
         
     }  
   
     public function reset_password()  
     {  
       $token = $this->base64url_decode($this->uri->segment(5));           
       $cleanToken = $this->security->xss_clean($token);  
         
       $user_info = $this->m_global->isTokenValid($cleanToken); //either false or array();          
         
       if(!$user_info){  
         $this->session->set_flashdata('sukses', 'Token tidak valid atau kadaluarsa');  
         
       }    
   
       $data = array(  
         'title'=> 'Halaman Reset Password ',  
         'username'=> $user_info->username,     
         'token'=>$this->base64url_encode($token)  
       );  
         
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');  
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');         
         
       if ($this->form_validation->run() == FALSE) {    
         $this->load->view('authentication/reset_password', $data);  
       }else{  
                           
         $post = $this->input->post(NULL, TRUE);          
          $cleanPost = $this->security->xss_clean($post);          
         $hashed = md5($cleanPost['password']);          
         $cleanPost['password'] = $hashed;  
         $cleanPost['id_user'] = $user_info->id_user;  
         unset($cleanPost['passconf']);          
         if(!$this->m_global->updatePassword($cleanPost)){  
           $this->session->set_flashdata('sukses', 'Update password gagal.');  
         }else{  
           $this->session->set_flashdata('sukses', 'Password anda sudah  
             diperbaharui. Silakan login.');  
         }  
         redirect(site_url('auth/login'),'refresh');         
       }  
     }  
       
     public function base64url_encode($data) {   
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
     }   
     
     public function base64url_decode($data) {   
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
     }      
 }  
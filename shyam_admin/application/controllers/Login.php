<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->library('form_validation');
          $this->load->model('login_model');
     }

     public function index()
     {
          if($this->session->has_userdata('loginuser'))
          {
               redirect("welcome");
          }
          $this->load->view('login_view');
     }

     public function login()
     {
          if(isset($_POST['submit']))
          {
               $this->form_validation->set_rules('admin_name', 'Username', 'required');
               $this->form_validation->set_rules('admin_pass', 'Password', 'required');
               if($this->form_validation->run() == FALSE)
               { 
                    $this->load->view('login_view');
               } 
               else
               { 
                    // echo 2;
                    $admin_name=$_POST['admin_name'];
                    $admin_pass=md5($_POST['admin_pass']);
                    
                    if($this->login_model->get_user($admin_name,$admin_pass))
                    {
                         redirect("welcome");
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', 'Invalid username and password!');
                         $this->load->view('login_view');
                    }
               }     
          }
          else
          {
               $this->session->set_flashdata('msg', 'Invalid username and password!');
               $this->load->view('login_view');
          }    
     }

     public function logout()
     {
          $array_items = array('admin_name', 'loginuser');
          $this->session->unset_userdata($array_items);
          $this->session->sess_destroy();
          $newdata = array(
               'admin_name'  => NULL,
               'loginuser'=> NULL);
          $this->session->set_userdata($newdata);
          $this->index();
     }
}
?>
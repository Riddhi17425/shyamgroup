<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_model');
        if(!$this->session->has_userdata('loginuser'))
        {
           redirect("login");
        }
    }

	public function index()
	{
        $data['contact_inq']=$this->welcome_model->get_conatct_number();
        $data['vender_inq']=$this->welcome_model->get_vender_number();
        $data['newsletter']=$this->welcome_model->get_news_letter_number();
        $this->load->view('welcome_message',$data);
	}
	
    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home','refresh');
    }
}
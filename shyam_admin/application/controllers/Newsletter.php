<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('newsletter_model');
        if(!$this->session->has_userdata('loginuser'))
	    {
	       redirect("login");
	    }
    }

	public function index()
	{
		$data['tbl_newsletter']=$this->newsletter_model->get_list();
		$this->load->view('newsletter_list', $data);
	}
	
}
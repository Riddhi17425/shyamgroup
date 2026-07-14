<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
        if(!$this->session->has_userdata('loginuser'))
	    {
	       redirect("login");
	    }
    }

	public function index()
	{
		$data['tbl_contact']=$this->contact_model->get_list();
		$this->load->view('contact_list', $data);
	}
	
}
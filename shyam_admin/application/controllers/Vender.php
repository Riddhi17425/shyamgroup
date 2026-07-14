<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vender extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('vender_model');
        if(!$this->session->has_userdata('loginuser'))
	    {
	       redirect("login");
	    }
    }

	public function index()
	{
		$data['tbl_vender']=$this->vender_model->get_list();
		$this->load->view('vender_list', $data);
	}
	
}
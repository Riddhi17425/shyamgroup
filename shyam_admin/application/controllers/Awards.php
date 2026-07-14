<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awards extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Awards_model');
        if(!$this->session->has_userdata('loginuser'))
	    {
	       redirect("login");
	    }
    }

    public function index()
	{
		$data['tbl_blog']=$this->Awards_model->get_list();
		$this->load->view('awards', $data);
	}

	public function add_form()
	{
		$this->load->view('awards_form');
	}

	public function insert_form()
	{
		$this->Awards_model->insert_form();
		redirect("awards");
	}

    public function delete_row($news_awards_id)
	{   
		$this->Awards_model->delete_row($news_awards_id);
    	$this->index();
    }
}

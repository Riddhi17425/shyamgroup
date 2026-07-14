<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('changepassword');
	}

	public function updatepassword()
	{
        $newpass=$this->input->post('newpass');
        $repass=$this->input->post('repass');
        $session_id = $this->session->userdata('admin_id');

        $data=array('admin_pass'=>md5($repass));
        $this->db->where('admin_id',$session_id);
        $this->db->update('tbl_admin',$data);

        $this->session->set_flashdata('msg','Password Change Sucessfully');

		redirect("changepassword");
		//$this->index();
	}

	
}

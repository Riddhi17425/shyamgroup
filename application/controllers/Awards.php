<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awards extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('projects_model');
        $this->load->model('news_model');
    }

  public function index()
	{
    $data['tbl_awards']=$this->projects_model->get_awards();
    $data['tbl_projects']=$this->projects_model->get_projects_list();
    $data['tbl_cms']=$this->projects_model->get_cms_side();
    $data['tbl_news']=$this->news_model->get_news_list();
    $data['tbl_news_footer']=$this->news_model->get_news_footer_list();
		
		$this->load->view('awards',$data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fort_villa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('banner_model');
        $this->load->model('projects_model');
        $this->load->model('news_model');
    }

	public function index()
	{
            $data['tbl_banner']=$this->banner_model->get_banner_list();
            $data['tbl_projects']=$this->projects_model->get_projects_list();
            $data['tbl_news']=$this->news_model->get_news_list();
            $data['tbl_news_footer']=$this->news_model->get_news_footer_list();
            $data['tbl_testimonial']=$this->projects_model->get_testimonial();
            $this->load->view('fort_villa',$data);
	}
}

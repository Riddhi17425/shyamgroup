<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Our_Projects extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('projects_model');
        $this->load->model('news_model');
    }

    public function index()
    {
        // $data['meta_title']             = "";
        // $data['meta_description']       = "";
        $data['meta_image']      = base_url('images/og-default.jpg');
        $data['tbl_projects']    = $this->projects_model->get_projects_list();
        $data['tbl_cms']         = $this->projects_model->get_cms_side();
        $data['tbl_news']        = $this->news_model->get_news_list();
        $data['tbl_news_footer'] = $this->news_model->get_news_footer_list();
        $this->load->view('our-projects', $data);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->model('projects_model');
    }

    // Blog Listing
    public function index()
    {
        $data['tbl_projects'] = $this->projects_model->get_projects_list();
        $data['tbl_cms']      = $this->projects_model->get_cms_side();
        $data['tbl_blog']     = $this->Blog_model->get_blog_list();

        $this->load->view('blog', $data);
    }

   
    public function detail($url)
    {
        $row = $this->Blog_model->get_blog_detail($url);

        if (!$row) {
            show_404();
        }

        $data['blog_detail']  = $row;
        $data['tbl_projects'] = $this->projects_model->get_projects_list();
        $data['tbl_cms']      = $this->projects_model->get_cms_side();

        $this->load->view('blog-detail', $data);
    }
}

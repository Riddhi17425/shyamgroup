<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('projects_model');
        $this->load->model('news_model');
    }

    public function index($id)
    {
        // if($name=="shyam-villa")
        // {
        // 	$id=2;
        // }
        // elseif($name=="pinnacle-city")
        // {
        // 	$id=5;
        // }
        // elseif($name=="dholera-global-city")
        // {
        // 	$id=6;
        // }
        // elseif($name=="shyam-repose")
        // {
        // 	$id=9;
        // }
        // else
        // {
        // 	redirect("home");
        // }

        $row = $this->projects_model->get_projects_detail($id);
        // $data['meta_title']             = "";
        // $data['meta_description']       = "";
        $data['meta_image']      = base_url('images/og-default.jpg');
        $data['project_detail']  = $row;
        $data['advantage']       = $this->projects_model->get_project_advantage($row['id']);
        $data['benefits']        = $this->projects_model->get_project_benefits($row['id']);
        $data['images']          = $this->projects_model->get_project_images($row['id']);
        $data['tbl_projects']    = $this->projects_model->get_projects_list();
        $data['tbl_cms']         = $this->projects_model->get_cms_side();
        $data['tbl_news']        = $this->news_model->get_news_list();
        $data['tbl_news_footer'] = $this->news_model->get_news_footer_list();
        // print_r($data);
        // exit();
        $this->load->view('project', $data);
    }

    public function slug_to_id($slug)
    {
        $this->load->model('projects_model');
        $this->load->model('news_model');

        $project = $this->projects_model->get_project_by_slug($slug);

        if (! $project) {
            show_404();
        }

        // Directly load index() method so URL remains clean
        $this->index($project['id']);
    }
    // public function shyam_villa()
    // {
    // 	$id=2;

    // 	$row=$this->projects_model->get_projects_detail($id);
    // 	$data['project_detail']=$row;
    // 	$data['advantage']=$this->projects_model->get_project_advantage($row['id']);
    // 	$data['benefits']=$this->projects_model->get_project_benefits($row['id']);
    // 	$data['images']=$this->projects_model->get_project_images($row['id']);
    // 	$data['tbl_projects']=$this->projects_model->get_projects_list();
    // 	$data['tbl_cms']=$this->projects_model->get_cms_side();
    // 	$data['tbl_news']=$this->news_model->get_news_list();
    // 	// print_r($data);
    // 	// exit();
    // 	$this->load->view('project',$data);
    // }

    // public function pinnacle_city()
    // {
    // 	$id=5;

    // 	$row=$this->projects_model->get_projects_detail($id);
    // 	$data['project_detail']=$row;
    // 	$data['advantage']=$this->projects_model->get_project_advantage($row['id']);
    // 	$data['benefits']=$this->projects_model->get_project_benefits($row['id']);
    // 	$data['images']=$this->projects_model->get_project_images($row['id']);
    // 	$data['tbl_projects']=$this->projects_model->get_projects_list();
    // 	$data['tbl_cms']=$this->projects_model->get_cms_side();
    // 	$data['tbl_news']=$this->news_model->get_news_list();
    // 	// print_r($data);
    // 	// exit();
    // 	$this->load->view('project',$data);
    // }

    // public function dholera_global_city()
    // {
    // 	$id=6;

    // 	$row=$this->projects_model->get_projects_detail($id);
    // 	$data['project_detail']=$row;
    // 	$data['advantage']=$this->projects_model->get_project_advantage($row['id']);
    // 	$data['benefits']=$this->projects_model->get_project_benefits($row['id']);
    // 	$data['images']=$this->projects_model->get_project_images($row['id']);
    // 	$data['tbl_projects']=$this->projects_model->get_projects_list();
    // 	$data['tbl_cms']=$this->projects_model->get_cms_side();
    // 	$data['tbl_news']=$this->news_model->get_news_list();
    // 	// print_r($data);
    // 	// exit();
    // 	$this->load->view('project',$data);
    // }

    // public function shyam_repose()
    // {
    // 	$id=9;

    // 	$row=$this->projects_model->get_projects_detail($id);
    // 	$data['project_detail']=$row;
    // 	$data['advantage']=$this->projects_model->get_project_advantage($row['id']);
    // 	$data['benefits']=$this->projects_model->get_project_benefits($row['id']);
    // 	$data['images']=$this->projects_model->get_project_images($row['id']);
    // 	$data['tbl_projects']=$this->projects_model->get_projects_list();
    // 	$data['tbl_cms']=$this->projects_model->get_cms_side();
    // 	$data['tbl_news']=$this->news_model->get_news_list();
    // 	// print_r($data);
    // 	// exit();
    // 	$this->load->view('project',$data);
    // }
}

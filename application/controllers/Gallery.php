<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function index()
    {
        // $data['meta_title']             = "";
        // $data['meta_description']       = "";
        $data['meta_image'] = base_url('images/og-default.jpg');
        $this->load->model('projects_model');

        $data['projects'] = $this->projects_model->get_projects_list();

        $this->load->view('gallery', $data);
    }

}

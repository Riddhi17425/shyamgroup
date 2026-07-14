<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Gallery extends CI_Controller {
 
    public function index()
{
    $this->load->model('projects_model');

    $data['projects'] = $this->projects_model->get_projects_list();

    $this->load->view('gallery', $data);
}

}
 
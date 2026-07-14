<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Print_Media extends CI_Controller {
 
    public function index()
    {
        $this->load->model('projects_model');
        $this->load->model('Print_media_model');
    
        $data['projects'] = $this->projects_model->get_projects_list();
        $data['print_images'] = $this->Print_media_model->get_all_images();
    
        $this->load->view('print_media', $data);
    }
}
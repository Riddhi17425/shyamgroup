<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        if(!$this->session->has_userdata('loginuser'))
	    {
	       redirect("login");
	    }
    }

    public function index()
	{
		$data['tbl_blog']=$this->blog_model->get_list();
		$this->load->view('blog_list', $data);
	}

	public function add_form()
	{
		$this->load->view('blog_form');
	}

	public function insert_form()
	{
		$this->blog_model->insert_form();
		redirect("blog");
	}

	public function delete_row($news_blog_id)
	{   
		$this->blog_model->delete_row($news_blog_id);
    	$this->index();
    }

	public function edit_blog($news_blog_id)
	{
    	$row=$this->blog_model->edit_blog($news_blog_id);
		$data['blog']=$row;
    	$this->load->view('blog_form_update',$data);
    }

    public function update_blog($news_blog_id)
    {
        $news_blog_id=$this->input->post('news_blog_id');

        if(!empty($_FILES['image']['name']))
        {
            $image['upload_path'] = 'upload/dholera/';
            $image['allowed_types'] = 'jpg|jpeg|png|gif';
            $image['file_name'] = $_FILES['image']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$image);
            $this->upload->initialize($image);
            if($this->upload->do_upload('image'))
            {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            }
            else
            {
                $image = '';
            }

            $data=array(
                    'title'=>$this->input->post('name'),
                    'brief_detail'=>$this->input->post('description'),
                    'news_detail'=>$this->input->post('news_detail'),
                    'add_date'=>$this->input->post('date'),
                    'image'=>$image);
        }
        else
        {
            $data=array(
                    'title'=>$this->input->post('name'),
                    'brief_detail'=>$this->input->post('description'),
                    'news_detail'=>$this->input->post('news_detail'),
                    'add_date'=>$this->input->post('date'));
        }
        
        $this->db->where('id',$news_blog_id);
        $this->db->update('news',$data);
        redirect('blog/index');
    }
}
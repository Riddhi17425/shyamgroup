<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Media_model');
        if(!$this->session->has_userdata('loginuser'))
	    {
	       redirect("login");
	    }
    }

    public function index()
	{
		$data['tbl_blog']=$this->Media_model->get_list();
		$this->load->view('media_list', $data);
	}

	public function add_form()
	{
		$this->load->view('media_form');
	}

	public function insert_form()
	{
		$this->Media_model->insert_form();
		redirect("blog");
	}

	public function delete_row($news_media_id)
	{   
		$this->Media_model->delete_row($news_media_id);
    	$this->index();
    }

	public function edit_blog($news_media_id)
	{
    	$row=$this->Media_model->edit_blog($news_media_id);
		$data['blog']=$row;
    	$this->load->view('media_form_update',$data);
    }

    public function update_blog($news_media_id)
    {
        // $news_media_id=$this->input->post('news_media_id');
        // echo "**";
        // echo $news_media_id;exit;
        if(!empty($_FILES['image']['name']))
        {
            $image['upload_path'] = 'upload/media/';
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
        
        $this->db->where('id',$news_media_id);
        $this->db->update('press_releas',$data);
        redirect('media');
    }
}
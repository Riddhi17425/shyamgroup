<?php 
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Blog_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_list()
        {
            //$query = $this->db->get('news');
            $this->db->select('*');
            $query = $this->db->get('news');
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

        public function insert_form()
        {
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
                }else
                {
                    $image = '';
                }
            }
            else
            {
                $image = '';
            }
            $name=$this->input->post('name');
            $description=$this->input->post('description');
            $date=$this->input->post('date');
            $news_detail=$this->input->post('news_detail');
            $type="blog";
            //$image=$this->input->post('image');

            $data_query= array(
                'title'=>$name,
                'brief_detail'=>$description,
                'add_date'=>$date,
                'news_detail'=>$news_detail,
                'image'=>$image);
            $this->db->insert('news',$data_query);
        }

        public function delete_row($news_blog_id)
        {
            $this->db->where('id',$news_blog_id);
            $this->db->delete('news');
        }

        public function edit_blog($news_blog_id)
        {
            $this->db->where('id',$news_blog_id);
            $query=$this->db->get('news');
            return $query->row();
        }

    }
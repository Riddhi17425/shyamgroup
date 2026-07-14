<?php 
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Awards_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_list()
        {
            //$query = $this->db->get('awards');
            $this->db->select('*');
            $query = $this->db->get('awards');
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

        public function insert_form()
        {
            if(!empty($_FILES['image']['name']))
            {
                echo "haa";
                $image['upload_path'] = 'upload/awards/';
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
                echo "else";
                $image = '';
            }

            $data_query= array(
                'image'=>$image);
            $this->db->insert('awards',$data_query);
        }

        public function delete_row($news_blog_id)
        {
            $this->db->where('id',$news_blog_id);
            $this->db->delete('awards');
        }
    }
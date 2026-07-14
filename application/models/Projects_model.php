<?php 
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Projects_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_projects_list()
        {
            $query = $this->db->get('projects');
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

        public function get_company_profile()
        {
            $category=1;
            $this->db->where('category',$category);
            $query=$this->db->get('cms');
            return $query->row();
        }

        public function get_vision()
        {
            $category=2;
            $this->db->where('category',$category);
            $query=$this->db->get('cms');
            return $query->row();
        }

        public function get_cms_side()
        {
            $query = $this->db->get('projects',4);
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

        public function get_awards()
        {
            $this->db->from('awards');
            $this->db->order_by("id","desc");
            $query=$this->db->get();
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

        public function get_pressrelease()
        {
            $this->db->from('press_releas');
            $this->db->order_by("id","desc");
            $query=$this->db->get();
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

        public function get_pressrelease_detail($id)
        {
            $this->db->where('id',$id);
            $query=$this->db->get('press_releas');
            return $query->row();
        }

        public function get_news_detail($id)
        {
            $this->db->where('id',$id);
            $query=$this->db->get('news');
            return $query->row();
        }

        public function get_projects()
        {
            $query = $this->db->get('projects');
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

        public function get_projects_documents()
        {
            $data=array();
            $query = $this->db->get('projects');
            $query->num_rows();
            $result = $query->result_array();
            foreach($result as $projects)
            {
                $this->db->select('*');
                $this->db->where("projects_id",$projects['id']);
                $query1 = $this->db->get('projects_documents');
                $result1 = $query1->result_array();
                $data[$projects['id']] = $result1;
            }
            return $data;
        }

        public function get_testimonial()
        {
            $query = $this->db->get('testimonial');
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

        public function get_projects_detail($id)
        {
            $data=array();
            $this->db->where('id',$id);
            $query = $this->db->get('projects');
            $query->num_rows();
            $result = $query->row_array();
            
            return $result;
        }

        public function get_project_advantage($id)
        {
            $data=array();
            $this->db->where('pid',$id);
            $this->db->order_by("id", "desc");
            $query = $this->db->get('project_advantage');
            $query->num_rows();
            $result = $query->result_array();
            
            return $result;
        }

        public function get_project_benefits($id)
        {
            $data=array();
            $this->db->where('pid',$id);
            $this->db->order_by("id", "desc");
            $query = $this->db->get('project_benefits');
            $query->num_rows();
            $result = $query->result_array();
            
            return $result;
        }

        public function get_project_images($id)
        {
            $data=array();
            $this->db->where('projects_name',$id);
            $this->db->order_by("id", "desc");
            $query = $this->db->get('projects_images');
            $query->num_rows();
            $result = $query->result_array();
            
            return $result;
        }

        public function get_ad_video()
        {
            $data=array();
            $this->db->order_by("id", "asc");
            $query = $this->db->get('video_advideo');
            $query->num_rows();
            $result = $query->result_array();
            
            return $result;
        }
        public function get_project_by_slug($slug)
        {
            return $this->db->where('slug', $slug)->get('projects')->row_array();
        }
    }
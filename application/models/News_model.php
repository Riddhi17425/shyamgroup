<?php 
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class News_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_news_list()
        {
            $this->db->from('news');
            $this->db->order_by("id","desc");
            $query=$this->db->get();
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

        public function get_news_footer_list()
        {
            $this->db->from('news');
            $this->db->order_by("id","desc");
            $this->db->limit('4');
            $query=$this->db->get();
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

    }
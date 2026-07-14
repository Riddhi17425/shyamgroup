<?php 
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Banner_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_banner_list()
        {
            $query = $this->db->get('header_image');
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

    }
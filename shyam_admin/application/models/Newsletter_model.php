<?php 
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Newsletter_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_list()
        {
            $query = $this->db->get('newsletter');
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

    }
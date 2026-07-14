<?php 
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Contact_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_list()
        {
            $query = $this->db->get('contact_inq');
            $query->num_rows();
            $result = $query->result_array();
            return $result;
        }

    }
<?php 
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    class Welcome_model extends CI_Model
    {
     	public function get_conatct_number()
        {
            $query1=$this->db->get('contact_inq');
            $result1=$query1->num_rows();
            return $result1;
        }

        public function get_vender_number()
        {
            $query1=$this->db->get('vender_inq');
            $result1=$query1->num_rows();
            return $result1;
        }

        public function get_news_letter_number()
        {
            $query1=$this->db->get('newsletter');
            $result1=$query1->num_rows();
            return $result1;
        }
    }
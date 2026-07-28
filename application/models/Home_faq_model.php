<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_faq_model extends CI_Model
{
    public function get_home_faqs()
    {
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'ASC');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('home_faqs');
        return $query->result_array();
    }
}

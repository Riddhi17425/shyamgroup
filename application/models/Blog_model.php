<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Fetch all blogs
    public function get_blog_list()
    {
        $this->db->from('blogs');
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }

    // Fetch single blog by URL
    public function get_blog_detail($url)
    {
        return $this->db
            ->where("url", $url)
            ->get("blogs")
            ->row_array();
    }
}

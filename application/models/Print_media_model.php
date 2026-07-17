<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Print_media_model extends CI_Model
{

    public function get_all_images()
    {
        return $this->db->order_by('id', 'ASC')->get('print_media')->result();
    }
}

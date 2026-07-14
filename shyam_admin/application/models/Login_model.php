<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }

     function get_user($admin_name,$admin_pass)
     {
          $this->db->select('*');
          $this->db->from('tbl_admin');
          $this->db->where('admin_name', $admin_name);
          $this->db->where('admin_pass', $admin_pass);
          $query = $this->db->get();
          if($query->num_rows() == 1)
          {
               $row = $query->row();
               $sessiondata = array(
                    'admin_id' => $row->admin_id,
                    'admin_name' => $row->admin_name,
                    'loginuser' => TRUE);
               $this->session->set_userdata($sessiondata);
               $this->session->set_flashdata('msg','Login Successfully');
               //print_r($sessiondata);
               return true;
          }
          else
          {
               $this->session->set_flashdata('msg','Admin Not Found');
               return false;
          }
     }
}
?>
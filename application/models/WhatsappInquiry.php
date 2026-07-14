<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WhatsappInquiry extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function create_inquiry($message, $phone) {

        $data = [
            'phone'       => $phone,   // +91 country code saved
            'message'     => $message,
            'created_at'  => date('Y-m-d H:i:s')
        ];

        // TABLE NAME SAME RAKHA — MODEL BREAK NA HO
        return $this->db->insert('WhatsappInquiry', $data);
    }
}

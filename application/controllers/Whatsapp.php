<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatsapp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('WhatsappInquiry');
    }

    public function inquiry() {

        $this->form_validation->set_rules(
            'phone',
            'Phone Number',
            'required|min_length[10]|max_length[20]'
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('whatsapp_modal');
        } else {

            $phone   = $this->input->post('phone', true);
            $message = $this->input->post('message', true) ?? '';

            // 1️⃣ Save to Database
            $this->WhatsappInquiry->create_inquiry($message, $phone);

            // 2️⃣ Prepare Google Sheet Data
            $timestamp = date('Y-m-d H:i:s');

            $sheetsData = [
                'form_type' => 'whatsapp inquiry',
                'contact'   => $phone,
                'message'   => $message,
                'date'      => $timestamp,
            ];

            // 3️⃣ Send Data to Google Sheet using cURL
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://script.google.com/macros/s/AKfycbxCGycKNlFsxiIBW6XX20E7zNEeuxRnjImZgbFxpuRssLXXejW54bbUs_L9p1wkC-rg/exec");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($sheetsData));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json'
            ]);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                log_message('error', 'Google Sheet Error: ' . curl_error($ch));
            }

            curl_close($ch);

            // 4️⃣ WhatsApp Redirect
            $myNumber = "918511332200";
            $defaultMessage = "Hello, I'm visiting your website and would like to know more";

            $url = "https://api.whatsapp.com/send/?phone={$myNumber}&text=" . urlencode($defaultMessage);

            redirect($url);
        }
    }
}

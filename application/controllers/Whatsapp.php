<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatsapp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('WhatsappInquiry');
    }

    public function inquiry()
    {
        /* ---------- INPUT ---------- */
        $phone   = trim($this->input->post('phone', true));
        $message = trim($this->input->post('message', true) ?? '');

        /* ---------- PHONE VALIDATION ---------- */
        if (empty($phone))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter your phone number.'
            );

            redirect($this->agent->referrer() ?: 'home');
            return;
        }

        if (!preg_match('/^[0-9]{10,15}$/', $phone))
        {
            $this->session->set_flashdata(
                'msg',
                'Phone number must contain between 10 and 15 digits.'
            );

            redirect($this->agent->referrer() ?: 'home');
            return;
        }

        /* ---------- MESSAGE VALIDATION ---------- */
        if (!empty($message) && strlen($message) > 1000)
        {
            $this->session->set_flashdata(
                'msg',
                'Message may not exceed 1000 characters.'
            );

            redirect($this->agent->referrer() ?: 'home');
            return;
        }

        /* ---------- ENGLISH ONLY ---------- */
        if (!empty($message) && !$this->is_english_only($message))
        {
            $this->session->set_flashdata(
                'msg',
                'Message must contain English characters only.'
            );

            redirect($this->agent->referrer() ?: 'home');
            return;
        }

        /* ---------- SAVE TO DATABASE ---------- */
        $this->WhatsappInquiry->create_inquiry(
            $message,
            $phone
        );

        /* ---------- PREPARE GOOGLE SHEET DATA ---------- */
        $timestamp = date('Y-m-d H:i:s');
        $sheetsData = [
            'form_type' => 'whatsapp inquiry',
            'contact'   => $phone,
            'message'   => $message,
            'date'      => $timestamp,
        ];

        /* ---------- SEND DATA TO GOOGLE SHEET ---------- */
        $ch = curl_init();

        curl_setopt(
            $ch,
            CURLOPT_URL,
            "https://script.google.com/macros/s/AKfycbzx5c633cEsg_Z-l1ZNdvNDJBIJ7s9kGJ4Of06wet6UdgEGmfK3TPjqycsVn_sMKgslWA/exec"
        );

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            json_encode($sheetsData)
        );
        curl_setopt(
            $ch,
            CURLOPT_RETURNTRANSFER,
            true
        );
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            [
                'Content-Type: application/json'
            ]
        );

        $response = curl_exec($ch);
        if (curl_errno($ch))
        {
            log_message(
                'error',
                'Google Sheet Error: ' . curl_error($ch)
            );
        }

        curl_close($ch);

        /* ---------- WHATSAPP REDIRECT ---------- */
        $myNumber = "918511332200";
        $defaultMessage = "Hello, I'm visiting your website and would like to know more";
        $url = "https://api.whatsapp.com/send/?phone={$myNumber}&text=" . urlencode($defaultMessage);
        redirect($url);
    }
    
    private function is_english_only($text)
    {
        return preg_match(
            '/^[a-zA-Z0-9\s.,!?\'"()\-:;\/@#%&+_=]*$/',
            $text
        );
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModalForm extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->database();
        $this->load->helper('url');
    }

    public function submit_form()
    {
        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        $secret = '6LcYahEsAAAAAG2cOu0JXqLyYOkydNFzqkLbGp6F';

        $verifyResponse = file_get_contents(
            'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$recaptchaResponse
        );
        $responseData = json_decode($verifyResponse);

        if (!$responseData->success) {
            $this->session->set_flashdata('msg', 'Captcha verification failed!');
            redirect('home');
        }
        
        $name    = trim($this->input->post('name'));
        $email   = trim($this->input->post('email'));
        $phone   = trim($this->input->post('phone'));
        $city    = trim($this->input->post('city'));
        $comment = trim($this->input->post('comment'));
    
        // ==================== RESTRICTION 1: BLOCK NAME ====================
        if (strcasecmp($name, 'RobertAppex') === 0) {
            $this->session->set_flashdata('msg', 'This name is not allowed.');
            redirect('home');
        }

    // ==================== RESTRICTION 2: ENGLISH ONLY ====================
        $fields = [
            'Name'    => $name,
            'Email'   => $email,
            'Phone'   => $phone,
            'City'    => $city,
            'Message' => $comment
        ];
    
        foreach ($fields as $label => $value) {
            if (!$this->is_english_only($value)) {
                $this->session->set_flashdata(
                    'msg',
                    $label . ' must contain English characters only.'
                );
                redirect('home');
            }
        }


        // ==================== FORM DATA ====================
        $data = [
            'name'       => $this->input->post('name'),
            'email'      => $this->input->post('email'),
            'phone'      => $this->input->post('phone'),
            'city'       => $this->input->post('city'),
            'comment'    => $this->input->post('comment'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Save to DB
        $this->db->insert('modal_inquiries', $data);

        // ==================== EMAIL CONFIG (Initialize ONCE) ====================
        $config = [
            'protocol'     => 'smtp',
            'smtp_host'    => 'mail.shyamgroups.co.in',
            'smtp_port'    => 465,
            'smtp_crypto'  => 'ssl',
            'smtp_user'    => 'admin@shyamgroups.co.in',
            'smtp_pass'    => 'admin@12345',
            'mailtype'     => 'html',
            'charset'      => 'utf-8',
            'newline'      => "\r\n",
            'smtp_timeout' => '30'
        ];

        $this->email->initialize($config);

        // ==================== 1) ADMIN EMAIL ====================
        $this->email->clear(); // Reset everything

        $adminMessage = "<h3>New Modal Form Submission</h3>";
        foreach ($data as $key => $value) {
            $adminMessage .= "<p><b>" . ucfirst(str_replace('_', ' ', $key)) . ":</b> " . htmlspecialchars($value) . "</p>";
        }
        $adminMessage .= "<p><small>Sent on: " . date('d M Y, h:i A') . "</small></p>";

        $this->email->from('admin@shyamgroups.co.in', 'ShyamGroups Website');
        $this->email->to([
            'webdeveloper3.intelliworkz@gmail.com',
            'info@shyamgroups.co.in',
            'hardik.shyamgroup@gmail.com'
        ]);
        $this->email->subject('New Modal Inquiry: ' . $data['name']);
        $this->email->message($adminMessage);
        $this->email->send();

        // ==================== 2) THANK YOU EMAIL TO USER ====================
        $this->email->clear(); // THIS IS THE KEY – forces new SMTP connection

        $userMessage = "
            <h3>Thank You, {$data['name']}!</h3>
            <p>We have received your inquiry and our team will contact you shortly.</p>
            <hr>
            <p><strong>Your Details:</strong><br>
            Name: {$data['name']}<br>
            Phone: {$data['phone']}<br>
            City: {$data['city']}</p>
            <br><br>
            Regards,<br>
            <strong>Shyam Groups Team</strong><br>
            Website: shyamgroups.co.in
        ";

        $this->email->from('admin@shyamgroups.co.in', 'Shyam Groups');
        $this->email->to($data['email']);
        $this->email->subject('Thank You for Your Inquiry – Shyam Groups');
        $this->email->message($userMessage);

        $user_sent = $this->email->send();

        // Optional: Log if user email fails
        if (!$user_sent) {
            log_message('error', 'MODAL USER EMAIL FAILED: ' . $this->email->print_debugger());
        }

        // ==================== PUSH TO GOOGLE SHEET ====================
        $sheet_url = "https://script.google.com/macros/s/AKfycbzV5vmpYsLTa19SyEpF-mmcxeNLROCb7QdOAVvgWq9jwa73KNXTYvrafNFFEgxBRpSy/exec";

        $payload = [
            "form_type"  => "Modal Form",
            "name"       => $data['name'],
            "email"      => $data['email'],
            "phone"      => $data['phone'],
            "city"       => $data['city'],
            "comment"    => $data['comment'],
            "created_at" => $data['created_at']
        ];

        $ch = curl_init($sheet_url);
        curl_setopt_array($ch, [
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => json_encode($payload),
            CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 10
        ]);
        curl_exec($ch);
        curl_close($ch);

        // ==================== SUCCESS ====================
        $this->session->set_flashdata('success', 'Thank you! Your inquiry has been sent.');
        redirect("home/thanks");
    }
    
    private function is_english_only($string)
    {
        // Allows ASCII characters only
        return preg_match('/^[\x00-\x7F]*$/', $string);
    }

    /*===========================================================
        NEWSLETTER FORM SUBMISSION
    ============================================================*/
    public function letter_mail()
    {
        $email = $this->input->post('email');

        // Database Insert
        $this->db->insert("newsletter", [
            "email"       => $email,
            "created_at"  => date("Y-m-d H:i:s")
        ]);

        // Email Content
        $htmlContent = "
            <h3>New Newsletter Subscription</h3>
            <p><b>Email:</b> $email</p>
        ";

        $config = [
            'protocol'      => 'smtp',
            'smtp_host'     => 'mail.shyamgroups.co.in',
            'smtp_port'     => 465,
            'smtp_crypto'   => 'ssl',
            'smtp_user'     => 'admin@shyamgroups.co.in',
            'smtp_pass'     => 'admin@12345',
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'newline'       => "\r\n",
            'smtp_timeout'  => 30
        ];

        $this->email->initialize($config);
        $this->email->from('admin@shyamgroups.co.in', 'ShyamGroups');
        $this->email->to([
            'webdeveloper3.intelliworkz@gmail.com',
            'info@shyamgroups.co.in',
            'hardik.shyamgroup@gmail.com',
            'dipakchhatani@gmail.com'
        ]);
        $this->email->subject('Newsletter Inquiry');
        $this->email->message($htmlContent);
        $this->email->send();

        redirect("home/thanks");
    }
}

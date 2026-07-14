<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['email','curl','session']);
        $this->load->model('projects_model');
        $this->load->model('news_model');
        $this->load->database();
    }

    /* ================= CONTACT PAGE ================= */
    public function index()
    {
        $data['tbl_projects']    = $this->projects_model->get_projects_list();
        $data['tbl_cms']         = $this->projects_model->get_cms_side();
        $data['tbl_news']        = $this->news_model->get_news_list();
        $data['tbl_news_footer'] = $this->news_model->get_news_footer_list();

        $this->load->view('contact-us', $data);
    }

    /* ================= FORM SUBMIT ================= */
    public function send_mail()
    {
        /* ---------- reCAPTCHA ---------- */
        $recaptcha = trim($this->input->post('g-recaptcha-response'));
        $secretKey = '6LcYahEsAAAAAG2cOu0JXqLyYOkydNFzqkLbGp6F';

        $verify = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptcha}"
        );
        $captcha = json_decode($verify);

        if (empty($captcha->success)) {
            $this->session->set_flashdata('msg','Google reCAPTCHA verification failed.');
            redirect('contact-us');
            return;
        }

        /* ---------- INPUT ---------- */
        $name    = trim($this->input->post('name'));
        $email   = trim($this->input->post('email'));
        $phone   = trim($this->input->post('phone'));
        $subject = trim($this->input->post('subject'));
        $comment = trim($this->input->post('comment'));

        /* ---------- BLOCK NAME ---------- */
        if (strcasecmp($name, 'RobertAppex') === 0) {
            $this->session->set_flashdata('msg','This name is not allowed.');
            redirect('contact-us');
            return;
        }

        /* ---------- ENGLISH ONLY ---------- */
        foreach ([$name,$email,$phone,$subject,$comment] as $val) {
            if (!$this->is_english_only($val)) {
                $this->session->set_flashdata(
                    'msg','Only English characters are allowed.'
                );
                redirect('contact-us');
                return;
            }
        }

        /* ---------- SAVE DATABASE ---------- */
        $this->db->insert('contact_inq', [
            'name'    => $name,
            'email'   => $email,
            'phone'   => $phone,
            'subject' => $subject,
            'comment' => $comment
        ]);

        /* ---------- EMAIL CONFIG ---------- */
        $config = [
            'protocol'    => 'smtp',
            'smtp_host'   => 'mail.shyamgroups.co.in',
            'smtp_port'   => 465,
            'smtp_crypto' => 'ssl',
            'smtp_user'   => 'admin@shyamgroups.co.in',
            'smtp_pass'   => 'admin@12345',
            'mailtype'    => 'html',
            'charset'     => 'utf-8',
            'newline'     => "\r\n",
            'smtp_timeout'=> 30
        ];
        $this->email->initialize($config);

        /* ---------- ADMIN EMAIL ---------- */
        $this->email->from('admin@shyamgroups.co.in','Shyam Groups');
        $this->email->to([
            'info@shyamgroups.co.in',
            'hardik.shyamgroup@gmail.com',
            'webdeveloper3.intelliworkz@gmail.com'
        ]);
        $this->email->subject('New Contact Inquiry: '.$subject);
        $this->email->message("
            <h3>New Contact Form Submission</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Subject:</b> $subject</p>
            <p><b>Message:</b><br>$comment</p>
        ");
        $this->email->send();

        /* ---------- USER EMAIL ---------- */
        $this->email->clear();
        $this->email->to($email);
        $this->email->subject('We received your message – Shyam Groups');
        $this->email->message("
            Dear $name,<br><br>
            Thank you for contacting <b>Shyam Groups</b>.<br>
            Our team will contact you shortly.<br><br>
            Regards,<br>
            Shyam Groups
        ");
        $this->email->send();

        /* ---------- GOOGLE SHEET ---------- */
        $payload = json_encode([
            'form_type' => 'Contact Form',
            'name'      => $name,
            'email'     => $email,
            'phone'     => $phone,
            'subject'   => $subject,
            'comment'   => $comment
        ]);

        $ch = curl_init(
            'https://script.google.com/macros/s/AKfycbzV5vmpYsLTa19SyEpF-mmcxeNLROCb7QdOAVvgWq9jwa73KNXTYvrafNFFEgxBRpSy/exec'
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_exec($ch);
        curl_close($ch);

        /* ---------- FINAL REDIRECT ---------- */
        $this->session->set_flashdata(
            'success','Thank you! Your message has been sent successfully.'
        );
        redirect('home/thanks');
    }

    /* ================= ENGLISH CHECK ================= */
    private function is_english_only($string)
    {
        if ($string === '') return true;
        return preg_match('/^[a-zA-Z0-9\s.,!?@#()\-+_\/]*$/', $string);
    }

    /* ================= NEWSLETTER ================= */
    public function letter_mail()
    {
        $email = $this->input->post('email');
        $this->db->insert('newsletter', ['email'=>$email]);
        redirect('home/thanks');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_Us extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['email', 'curl', 'session']);
        $this->load->model('projects_model');
        $this->load->model('news_model');
        $this->load->database();
    }

    /* ================= CONTACT PAGE ================= */
    public function index()
    {
        // $data['meta_title']             = "";
        // $data['meta_description']       = "";
        $data['meta_image']      = base_url('images/og-default.jpg');
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

        if (empty($recaptcha))
        {
            $this->session->set_flashdata(
                'msg',
                'Please verify that you are not a robot.'
            );
            redirect('contact-us');
            return;
        }

        $verify = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptcha}"
        );

        $captcha = json_decode($verify);

        if (empty($captcha->success))
        {
            $this->session->set_flashdata(
                'msg',
                'Google reCAPTCHA verification failed.'
            );
            redirect('contact-us');
            return;
        }

        /* ---------- INPUT ---------- */
        $name    = trim($this->input->post('name'));
        $email   = trim($this->input->post('email'));
        $phone   = trim($this->input->post('phone'));
        $subject = trim($this->input->post('subject'));
        $comment = trim($this->input->post('comment'));

        /* ---------- NAME VALIDATION ---------- */
        if (empty($name))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter your name.'
            );
            redirect('contact-us');
            return;
        }

        if (strlen($name) < 2 || strlen($name) > 70)
        {
            $this->session->set_flashdata(
                'msg',
                'Name must be between 2 and 70 characters.'
            );
            redirect('contact-us');
            return;
        }

        if (!preg_match('/^[a-zA-Z\s]+$/', $name))
        {
            $this->session->set_flashdata(
                'msg',
                'Name may contain letters and spaces only.'
            );
            redirect('contact-us');
            return;
        }

        /* ---------- EMAIL VALIDATION ---------- */
        if (empty($email))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter your email address.'
            );
            redirect('contact-us');
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter a valid email address.'
            );
            redirect('contact-us');
            return;
        }

        if (strlen($email) > 70)
        {
            $this->session->set_flashdata(
                'msg',
                'Email address may not exceed 70 characters.'
            );
            redirect('contact-us');
            return;
        }


        /* ---------- DISPOSABLE / TEMPORARY EMAIL CHECK ---------- */
        $emailDomain = strtolower(
            substr(strrchr($email, '@'), 1)
        );

        $blockedEmailDomains = [
            '10minutemail.com',
            '10minutemail.net',
            '10minutemail.org',
            '20minutemail.com',
            '33mail.com',
            'dispostable.com',
            'emailondeck.com',
            'fakeinbox.com',
            'fakemail.net',
            'guerrillamail.com',
            'guerrillamail.net',
            'guerrillamail.org',
            'guerrillamailblock.com',
            'getnada.com',
            'inboxbear.com',
            'mail-temp.com',
            'mailcatch.com',
            'maildrop.cc',
            'mailinator.com',
            'mailnesia.com',
            'mintemail.com',
            'mohmal.com',
            'mytemp.email',
            'sharklasers.com',
            'spam4.me',
            'temp-mail.org',
            'temp-mail.io',
            'tempail.com',
            'tempmail.com',
            'tempmail.net',
            'tempmailo.com',
            'throwawaymail.com',
            'trashmail.com',
            'trashmail.net',
            'yopmail.com',
            'yopmail.fr',
        ];

        if (in_array($emailDomain, $blockedEmailDomains, true))
        {
            $this->session->set_flashdata(
                'msg',
                'Please use a valid business or personal email address.'
            );
            redirect('contact-us');
            return;
        }

        /* ---------- PHONE VALIDATION ---------- */
        if (empty($phone))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter your phone number.'
            );
            redirect('contact-us');
            return;
        }

        if (!preg_match('/^[0-9]{10,15}$/', $phone))
        {
            $this->session->set_flashdata(
                'msg',
                'Phone number must contain between 10 and 15 digits.'
            );
            redirect('contact-us');
            return;
        }

        /* ---------- SUBJECT VALIDATION ---------- */
        if (empty($subject))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter a subject.'
            );
            redirect('contact-us');
            return;
        }

        if (strlen($subject) > 255)
        {
            $this->session->set_flashdata(
                'msg',
                'Subject may not exceed 255 characters.'
            );
            redirect('contact-us');
            return;
        }

        /* ---------- MESSAGE VALIDATION ---------- */
        if (!empty($comment) && strlen($comment) > 1000)
        {
            $this->session->set_flashdata(
                'msg',
                'Message may not exceed 1000 characters.'
            );
            redirect('contact-us');
            return;
        }

        /* ---------- BLOCK NAME ---------- */
        if (strcasecmp($name, 'RobertAppex') === 0)
        {
            $this->session->set_flashdata(
                'msg',
                'This name is not allowed.'
            );
            redirect('contact-us');
            return;
        }


        /* ---------- ENGLISH ONLY ---------- */
        foreach ([$name, $email, $phone, $subject, $comment] as $val)    
        {
            if (!empty($val) && !$this->is_english_only($val))
            {
                $this->session->set_flashdata(
                    'msg',
                    'Only English characters are allowed.'
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
            'comment' => $comment,
        ]);

        /* ---------- EMAIL CONFIG ---------- */
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
            'smtp_timeout' => 30,
        ];

        $this->email->initialize($config);

        /* ---------- ADMIN EMAIL ---------- */
        $this->email->from(
            'admin@shyamgroups.co.in',
            'Shyam Groups'
        );

        $this->email->to([
            'info@shyamgroups.co.in',
            'hardik.shyamgroup@gmail.com',
            'webdeveloper3.intelliworkz@gmail.com',
        ]);

        $this->email->subject(
            'New Contact Inquiry: ' . $subject
        );

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
            'form_type'  => 'Contact Form',
            'name'       => $name,
            'email'      => $email,
            'phone'      => $phone,
            'city'       => $city ?? '',
            'subject'    => $subject,
            'comment'    => $comment,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        $ch = curl_init(
            'https://script.google.com/macros/s/AKfycbzV5vmpYsLTa19SyEpF-mmcxeNLROCb7QdOAVvgWq9jwa73KNXTYvrafNFFEgxBRpSy/exec'
        );

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            ['Content-Type: application/json']
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);

        curl_exec($ch);
        curl_close($ch);

        /* ---------- FINAL REDIRECT ---------- */
        $this->session->set_flashdata(
            'success',
            'Thank you! Your message has been sent successfully.'
        );

        redirect('home/thanks');
    }

    /* ================= ENGLISH CHECK ================= */
    private function is_english_only($string)
    {
        if ($string === '') {
            return true;
        }

        return preg_match('/^[a-zA-Z0-9\s.,!?@#()\-+_\/]*$/', $string);
    }

    /* ================= NEWSLETTER ================= */
    public function letter_mail()
    {
        $email = $this->input->post('email');
        $this->db->insert('newsletter', ['email' => $email]);
        redirect('home/thanks');
    }
}

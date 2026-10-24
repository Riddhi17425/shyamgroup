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
        /* ---------- reCAPTCHA ---------- */
        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        $secret = '6LcYahEsAAAAAG2cOu0JXqLyYOkydNFzqkLbGp6F';

        if (empty($recaptchaResponse))
        {
            $this->session->set_flashdata(
                'msg',
                'Please verify that you are not a robot.'
            );
            redirect('home');
            return;
        }

        $verifyResponse = file_get_contents(
            'https://www.google.com/recaptcha/api/siteverify?secret='
            . $secret
            . '&response='
            . $recaptchaResponse
        );

        $responseData = json_decode($verifyResponse);
        if (empty($responseData->success))
        {
            $this->session->set_flashdata(
                'msg',
                'Google reCAPTCHA verification failed.'
            );
            redirect('home');
            return;
        }

        /* ---------- INPUT ---------- */
        $name    = trim($this->input->post('name'));
        $email   = trim($this->input->post('email'));
        $phone   = trim($this->input->post('phone'));
        $city    = trim($this->input->post('city'));
        $comment = trim($this->input->post('comment'));


        /* ---------- NAME VALIDATION ---------- */
        if (empty($name))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter your name.'
            );
            redirect('home');
            return;
        }

        if (strlen($name) < 2 || strlen($name) > 70)
        {
            $this->session->set_flashdata(
                'msg',
                'Name must be between 2 and 70 characters.'
            );
            redirect('home');
            return;
        }

        if (!preg_match('/^[a-zA-Z\s]+$/', $name))
        {
            $this->session->set_flashdata(
                'msg',
                'Name may contain letters and spaces only.'
            );
            redirect('home');
            return;
        }

        /* ---------- EMAIL VALIDATION ---------- */
        if (empty($email))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter your email address.'
            );
            redirect('home');
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter a valid email address.'
            );
            redirect('home');
            return;
        }

        if (strlen($email) > 70)
        {
            $this->session->set_flashdata(
                'msg',
                'Email address may not exceed 70 characters.'
            );
            redirect('home');
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
            redirect('home');
            return;
        }

        /* ---------- PHONE VALIDATION ---------- */
        if (empty($phone))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter your phone number.'
            );
            redirect('home');
            return;
        }

        if (!preg_match('/^[0-9]{10,15}$/', $phone))
        {
            $this->session->set_flashdata(
                'msg',
                'Phone number must contain between 10 and 15 digits.'
            );
            redirect('home');
            return;
        }

        /* ---------- CITY VALIDATION ---------- */
        if (empty($city))
        {
            $this->session->set_flashdata(
                'msg',
                'Please enter your city.'
            );
            redirect('home');
            return;
        }

        if (strlen($city) > 255)
        {
            $this->session->set_flashdata(
                'msg',
                'City may not exceed 255 characters.'
            );
            redirect('home');
            return;
        }

        /* ---------- MESSAGE VALIDATION ---------- */
        if (!empty($comment) && strlen($comment) > 1000)
        {
            $this->session->set_flashdata(
                'msg',
                'Message may not exceed 1000 characters.'
            );
            redirect('home');
            return;
        }

        /* ---------- BLOCK NAME ---------- */
        if (strcasecmp($name, 'RobertAppex') === 0)
        {
            $this->session->set_flashdata(
                'msg',
                'This name is not allowed.'
            );
            redirect('home');
            return;
        }

        /* ---------- ENGLISH ONLY ---------- */
        $fields = [
            'Name'    => $name,
            'Email'   => $email,
            'Phone'   => $phone,
            'City'    => $city,
            'Message' => $comment
        ];

        foreach ($fields as $label => $value)
        {
            if (!empty($value) && !$this->is_english_only($value))
            {
                $this->session->set_flashdata(
                    'msg',
                    $label . ' must contain English characters only.'
                );
                redirect('home');
                return;
            }
        }

        /* ---------- FORM DATA ---------- */
        $data = [
            'name'       => $name,
            'email'      => $email,
            'phone'      => $phone,
            'city'       => $city,
            'comment'    => $comment,
            'created_at' => date('Y-m-d H:i:s')
        ];

        /* ---------- SAVE TO DATABASE ---------- */
        $this->db->insert('modal_inquiries', $data);

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
            'smtp_timeout' => '30'
        ];

        $this->email->initialize($config);

        /* ---------- ADMIN EMAIL ---------- */
        $this->email->clear();
        $adminMessage = "<h3>New Modal Form Submission</h3>";

        foreach ($data as $key => $value)
        {
            $adminMessage .= "<p><b>"
                . ucfirst(str_replace('_', ' ', $key))
                . ":</b> "
                . htmlspecialchars($value)
                . "</p>";
        }

        $adminMessage .= "<p><small>Sent on: "
            . date('d M Y, h:i A')
            . "</small></p>";

        $this->email->from(
            'admin@shyamgroups.co.in',
            'ShyamGroups Website'
        );

        $this->email->to([
            'webdeveloper3.intelliworkz@gmail.com',
            'info@shyamgroups.co.in',
            'hardik.shyamgroup@gmail.com'
        ]);

        $this->email->subject(
            'New Modal Inquiry: ' . $data['name']
        );

        $this->email->message($adminMessage);
        $this->email->send();
        $this->email->clear();

        $userMessage = "
            <h3>Thank You, {$data['name']}!</h3>
            <p>
                We have received your inquiry and our team
                will contact you shortly.
            </p>
            <hr>
            <p>
                <strong>Your Details:</strong><br>
                Name: {$data['name']}<br>
                Phone: {$data['phone']}<br>
                City: {$data['city']}
            </p>
            <br><br>
            Regards,<br>
            <strong>Shyam Groups Team</strong><br>
            Website: shyamgroups.co.in
        ";

        $this->email->from(
            'admin@shyamgroups.co.in',
            'Shyam Groups'
        );

        $this->email->to($data['email']);
        $this->email->subject('Thank You for Your Inquiry – Shyam Groups');
        $this->email->message($userMessage);

        $user_sent = $this->email->send();
        if (!$user_sent)
        {
            log_message(
                'error',
                'MODAL USER EMAIL FAILED: '
                . $this->email->print_debugger()
            );
        }

        /* ---------- PUSH TO GOOGLE SHEET ---------- */
        $sheet_url = "https://script.google.com/macros/s/AKfycbzi0UFa7Y9Hw2SNNc23L5cAN4b929zxz3tMeMrhDpgMnFMFmKuoSi_fQqVcSVWmWdEE/exec";

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
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/json'
            ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 10
        ]);

        curl_exec($ch);
        curl_close($ch);

        /* ---------- SUCCESS ---------- */
        $this->session->set_flashdata(
            'success',
            'Thank you! Your inquiry has been sent.'
        );

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
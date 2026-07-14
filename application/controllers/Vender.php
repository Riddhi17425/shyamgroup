<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vender extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->library('curl');
        $this->load->model('projects_model');
        $this->load->model('news_model');
    }

	public function index()
	{
		$data['tbl_projects']=$this->projects_model->get_projects_list();
		$data['tbl_cms']=$this->projects_model->get_cms_side();
		$data['tbl_news']=$this->news_model->get_news_list();
        $data['tbl_news_footer']=$this->news_model->get_news_footer_list();
		$this->load->view('vender',$data);
	}

	public function send_mail()
	{
        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        //$userIp=$this->input->ip_address();
		$secret='6LcYahEsAAAAAG2cOu0JXqLyYOkydNFzqkLbGp6F';
        //$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response;=".$recaptchaResponse."&remoteip;=".$userIp;
        //$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response;=".$recaptchaResponse;
        //$response = $this->curl->simple_get($url);
        //$status= json_decode($response, true);
        
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$recaptchaResponse);
        $responseData = json_decode($verifyResponse);

        if($responseData->success)
        {   

        $company_name=$this->input->post('company_name');
        $contact_person=$this->input->post('contact_person');
        $designation=$this->input->post('designation');
        $email=$this->input->post('email');
        $contact_one=$this->input->post('contact_one');
        $contact_two=$this->input->post('contact_two');
        $landline=$this->input->post('landline');
        $gst_no=$this->input->post('gst_no');
        $pan_no=$this->input->post('pan_no');
        $web_site=$this->input->post('web_site');
        $address=$this->input->post('address');

        $data_query= array(
            'company_name'=>$company_name,
            'contact_person'=>$contact_person,
            'designation'=>$designation,
            'email'=>$email,
            'contact_one'=>$contact_one,
            'contact_two'=>$contact_two,
            'landline'=>$landline,
            'gst_no'=>$gst_no,
            'pan_no'=>$pan_no,
            'web_site'=>$web_site,
            'address'=>$address);
		//$this->projects_model->insert_form($data_query);
		$this->db->insert('vender_inq',$data_query);

	   	$htmlContent = '<h3> Dear Admin </h3>';
	    $htmlContent .= '<h4> New Vender Inquery Details</h4>';
        $htmlContent .= '<h4> Company Name = '.$company_name.'</h4>';
        $htmlContent .= '<h4> Contact Person Name = '.$contact_person.' </h4>';
        $htmlContent .= '<h4> Designation = '.$designation.'</h4>';
        $htmlContent .= '<h4> Email ID = '.$email.'</h4>';
        $htmlContent .= '<h4> Cell No Primary = '.$contact_one.'</h4>';
        $htmlContent .= '<h4> Cell No Secondary = '.$contact_two.'</h4>';
        $htmlContent .= '<h4> Landline No = '.$landline.' </h4>';
        $htmlContent .= '<h4> GST No = '.$gst_no.'</h4>';
        $htmlContent .= '<h4> PAN No = '.$pan_no.'</h4>';
        $htmlContent .= '<h4> Website = '.$web_site.'</h4>';
        $htmlContent .= '<h4> Address = '.$address.'</h4>';
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.shyamgroups.co.in',
            'smtp_port' => 465,
            'smtp_user' => 'admin@shyamgroups.co.in',
            'smtp_pass' => 'admin@12345',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );

            
            
        //$config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to(array('info@shyamgroups.co.in','hardik.shyamgroup@gmail.com','dipakchhatani@gmail.com','dm.intelliworkz@gmail.com'));
        $this->email->from('admin@shyamgroups.co.in','ShyamGroups');
        $this->email->subject('New Vender Contact Inquery');
        $this->email->message($htmlContent);
        $this->email->send();

		$this->session->set_flashdata('msg', 'Google Recaptcha Successful');
        redirect("home/thanks");
        }
        else
        {
            $this->session->set_flashdata('msg', 'Sorry Google Recaptcha Unsuccessful!!');
            $this->index();
        }
	}
    
}

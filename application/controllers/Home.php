<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('banner_model');
        $this->load->model('projects_model');
        $this->load->model('news_model');
        $this->load->model('Print_media_model');
        $this->load->model('Home_faq_model');
    }

    public function index()
    {
        $data['meta_title']       = "Trusted Real Estate Developer in Dholera SIR | Shyam Group";
        $data['meta_description'] = "Shyam Group is a trusted real estate developer in Dholera SIR, offering residential plots & land investment opportunities. RERA-linked projects, 700+ investors. Enquire now!";
        $data['meta_image']       = base_url('images/og-default.jpg');

        $data['tbl_banner']      = $this->banner_model->get_banner_list();
        $data['tbl_projects']    = $this->projects_model->get_projects_list();
        $data['tbl_news']        = $this->news_model->get_news_list();
        $data['tbl_news_footer'] = $this->news_model->get_news_footer_list();
        $data['tbl_testimonial'] = $this->projects_model->get_testimonial();
        $data['projects']        = $this->projects_model->get_projects_list();
        $data['print_images']    = $this->Print_media_model->get_all_images();
        $data['tbl_faqs']        = $this->Home_faq_model->get_home_faqs();
        $this->load->view('home', $data);
    }

    public function thanks()
    {
        $data['tbl_banner']      = $this->banner_model->get_banner_list();
        $data['tbl_projects']    = $this->projects_model->get_projects_list();
        $data['tbl_news']        = $this->news_model->get_news_list();
        $data['tbl_cms']         = $this->projects_model->get_cms_side();
        $data['tbl_news_footer'] = $this->news_model->get_news_footer_list();
        $this->load->view('thankyou', $data);
    }

    public function privacy_policy()
    {
        $data['meta_title']       = "Privacy Policy | Shyam Group";
        $data['meta_description'] = "Read Shyam Group's Privacy Policy to understand how we collect, use, and protect your personal information.";
        $data['meta_image']       = base_url('images/og-default.jpg');

        $this->load->view('privacy-policy', $data);
    }

    public function terms_conditions()
    {
        $data['meta_title']       = "Terms & Conditions | Shyam Group";
        $data['meta_description'] = "Read Shyam Group's Terms & Conditions governing the use of our website and services.";
        $data['meta_image']       = base_url('images/og-default.jpg');

        $this->load->view('terms-conditions', $data);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('All_inquiries_model');
	}

	public function all_inquiries()   
	{
		if (strtoupper($this->input->method()) !== 'GET') {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(405)
				->set_output(json_encode(array(
					'status' => FALSE,
					'message' => 'Only GET method is allowed.'
				)));
		}

		$data = $this->All_inquiries_model->get_all_inquiries();
		$has_inquiries = ! empty($data);

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'status' => TRUE,
				'message' => $has_inquiries
					? 'All inquiries fetched successfully.'
					: 'No inquiries found.',
				'data' => $data
			)));
	}
}
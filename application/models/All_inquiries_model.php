<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_inquiries_model extends CI_Model {

	protected $tables = array(
		'modal_inquiries',
		'contact_inq',
		'WhatsappInquiry',
		'vender_inq'
	);

	protected $excluded_emails = array(
		'seotest@gmail.com',
		'seoteam@gmail.com',
		'seotesting@gmail.com'
	);

	public function get_all_inquiries()
	{
		$result = array();

		foreach ($this->tables as $table) {
			if ( ! $this->db->table_exists($table)) {
				continue;
			}

			$query = $this->db->get($table);
			$records = $this->filter_excluded_emails($query->result_array());
			$record_count = count($records);

			if ($record_count === 0) {
				continue;
			}

			$result[$table] = array(
				'count' => $record_count,
				'records' => $records
			);
		}

		return $result;
	}

	protected function filter_excluded_emails($records)
	{
		$filtered_records = array();
		$excluded_emails = array_map('strtolower', $this->excluded_emails);

		foreach ($records as $record) {
			$record_email = $this->extract_email($record);

			if ($record_email !== NULL && in_array($record_email, $excluded_emails, TRUE)) {
				continue;
			}

			$filtered_records[] = $record;
		}

		return $filtered_records;
	}

	protected function extract_email($record)
	{
		foreach ($record as $key => $value) {
			if (strtolower($key) !== 'email') {
				continue;
			}

			$value = trim((string) $value);

			return $value === '' ? NULL : strtolower($value);
		}

		return NULL;
	}
} 
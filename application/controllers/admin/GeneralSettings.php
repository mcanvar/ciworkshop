<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneralSettings extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/General_Model');
	}

	public function index()
	{
		$data['site_name'] = $this->General_Model->get_setting('site_name');
		$data['site_slug'] = $this->General_Model->get_setting('site_slug');

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/pages/general_settings', $data);
		$this->load->view('admin/footer');
	}

	public function edit()
	{
		$settings = array(
			'site_name' => $this->input->post('site_name'),
			'site_slug' => $this->input->post('site_slug')
		);

		$this->General_Model->update($settings);

		redirect('admin/generalsettings');
	}
}

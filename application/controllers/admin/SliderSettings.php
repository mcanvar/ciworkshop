<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SliderSettings extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/General_Model');
		$this->load->model('admin/Slider_Model');
	}

	public function index()
	{
		$data['slides'] = $this->Slider_Model->get_slides();

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/pages/slider_settings', $data);
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

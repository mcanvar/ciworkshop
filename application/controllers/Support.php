<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('pages/support');
		$this->load->view('sidebar');
		$this->load->view('footer');
	}
}

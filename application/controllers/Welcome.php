<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('reviews_model');
	}
	public function index()
	{
        $data['reviews'] = $this->reviews_model->get_reviews();
		$this->load->view('dashboard', $data);
	}
}

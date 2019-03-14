<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->lang->load('auth');
		$this->load->library(['ion_auth', 'form_validation']);		
		$this->load->model('reviews_model');
        $this->load->helper('url_helper');
	}

	public function index()
	{
        $data['reviews'] = $this->reviews_model->get_reviews();
		$this->load->view('dashboard', $data);
	}

	public function view($id = NULL)
	{
        $data['reviews'] = $this->reviews_model->get_reviews($id);
		// if (empty($data['news_item'])){
  //           show_404();
  //       }
		$this->load->view('reviews/comments/index', $data);
	}


	public function create()
	{
		if (!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		var_dump('request');
		die();
	}

	public function storeReview($request)
	{
		var_dump($request);
		die();
	}

	public function storeComment($request)
	{
		var_dump($request);
		die();
	}
}

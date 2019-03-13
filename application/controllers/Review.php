<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('auth');
		$this->load->model('reviews_model');
        $this->load->helper('url_helper');
	}

	public function index()
	{
		$data['reviews'] = $this->reviews_model->get_reviews();
		$this->load->view('dashboard');
	}

	public function view($id = NULL)
	{
        $data['reviews'] = $this->reviews_model->get_reviews($id);
		// if (empty($data['news_item'])){
  //           show_404();
  //       }
		$this->load->view('reviews/comments/index', $data);
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

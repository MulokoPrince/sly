<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends MY_Controller {
	


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->helper('url');
		$this->load->library('layout');
	}
	public function index(){
		$this->home();
	}
	public function home()
	{

		//assets javascript et css
		$css = array('main.min', 'stylet','color','responsive');
		$js = array('email-decode.min','main.min', 'script');
		
		$this->layout->put_assets($css,$js);
		$this->layout->views('template/header')
					->views('template/left_nav')
					->views('template/right_sidebar')
					->views('articles/left_aside')
					->views('articles/user_home')
					->views('articles/right_aside')
					->view('template/footer');
	}

}

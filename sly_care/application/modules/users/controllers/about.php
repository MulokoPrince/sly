<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {
	


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->helper('url');
		$this->load->library('layout');

	}
	public function index(){
		$this->about();
	}
	public function about()
	{

		//assets javascript et css
		$css = array('main.min', 'stylet','color','responsive');
		$js = array('email-decode.min','main.min', 'script');
		$this->layout->put_assets($css,$js);

		//mise en place de la vue
		$this->layout
			->views('template/header')
			->views('template/left_nav')
			->views('template/right_sidebar')
			->views('about/user_about')
			->view('template/footer');
	}




}

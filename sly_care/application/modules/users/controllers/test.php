<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {
	


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->helper('url');
		$this->load->library('layout');

	}
	public function index(){
		$this->test1();
	}
	public function test1()
	{
		


		//assets javascript et css
		$css = array('bootstrap','mdb');
		$js = array('jQuery','bootstrap.bundle','bootstrap');
		$this->layout->put_assets($css,$js);

		$this->layout->set_theme('reg_theme');
		//mise en place de la vue
		$this->layout->view('test');
	}
	public function fail()
	{
		//assets javascript et css
		$css = array('bootstrap','mdb');
		$js = array('jQuery','bootstrap.bundle','bootstrap');
		$this->layout->put_assets($css,$js);

		$this->layout->set_theme('reg_theme');
		//mise en place de la vue
		$this->layout->view('fail');
	}

}


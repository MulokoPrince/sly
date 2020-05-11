<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Communication extends MY_Controller {

	public function chat(){
		$this->load->view('layouts/header');
		$this->load->view('chat.php');
		$this->load->view('layouts/footer');

	}

	public function __construct() {
		parent::__construct();
	 	if(!$this->session->userdata('USER_ID') &&session_cache_expire($this->session->userdata('USER_ID'))) {
	 		redirect(base_url('login'));
	 	}
	}
}
 

 ?>
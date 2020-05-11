<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	


	private function codeGererate($num){
		return random_string('alnum',$num);
	}

	public function index(){
		
		$this->load->view('layouts/login_lay/header');
		$this->load->view('login_view');
		$this->load->view('layouts/login_lay/footer');
	}


	public function signin(){
		$this->form_validation->set_rules('loginUsername','Email','required|trim');
		$this->form_validation->set_rules('loginPassword','Mot de passe','required|trim');
		$this->form_validation->set_error_delimiters();

		if ($this->form_validation->run()) {
			
			/*$tabl = 'users';
			$criters = array('USER_EMAIL' => $this->input->post('loginUsername'),'USER_MDP'=>sha1($this->input->post('loginPassword')));
			$result['result'] = $this->Model_Kub->checkExist($tabl,$criters);*/
			
				$email = $this->input->post('loginUsername');
				$mdp = sha1($this->input->post('loginPassword'));
		
				$results = $this->Model_Kub->existAd($email,$mdp);

			if (isset($results) && !empty($results)) {
				$session_create = ['USER_ID'=>$results->USER_ID,'USER_NAME'=>$results->USER_NAME,'USER_EMAIL'=>$results->USER_EMAIL,'USER_POST_NOM'=>$results->USER_POST_NOM];
				$this->session->set_userdata($session_create);
				return redirect(base_url('Dashboard/Dashboard'));
			}
			else{
				$this->session->set_flashdata('message','Mauvais identifiant ou soit vous n\'avez pas de compte');
				redirect(base_url('login'));
			}

		} else {
			
				$this->session->set_flashdata('message','Une erreur s\'est produite');
				redirect(base_url('login'));
		}
	}

	public function signup(){
		$table = 'roles';
		$tbl = 'users';
		$criters = array('ROLE_ID' => '1','IS_ACTIF'=>'1');
		$roles['roles'] = $this->Model_Kub->getRoles($table);
		$roles['exists'] =$this->Model_Kub->checkAdmin($tbl,$criters);
		/*echo "<pre>";
		print_r($roles);
		echo "<pre>";
		exit();*/
		$this->load->view('layouts/login_lay/header');
		$this->load->view('signup',$roles);
		$this->load->view('layouts/login_lay/footer');
	}

	public function signupTreat(){
		$data = $this->input->post();
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		$this->form_validation->set_rules('username','Nom','required|trim');
		$this->form_validation->set_rules('post_nom','Post-nom','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('gender','Sexe','required|trim');
		/*$this->form_validation->set_rules('role','Role','required|trim');*/
		$this->form_validation->set_rules('loginPassword','Mot de passe','required|trim');
		$this->form_validation->set_rules('passwordr','Deuxieme Mot de passe','required|trim|matches[loginPassword]');
		$this->form_validation->set_error_delimiters();
		if ($this->form_validation->run()) {
			if($this->input->post('role') && $this->input->post('role') == 1) {

			$data  = array(
							'CODE_USER'=>$this->codeGererate(6),
							'ROLE_ID'=>$this->input->post('role'),
							'USER_NAME'=>ucfirst( $this->input->post('username')),
							'USER_POST_NOM'=>ucfirst($this->input->post('post_nom')),
							'USER_EMAIL'=>$this->input->post('email'),
							'USER_MDP'=>sha1($this->input->post('loginPassword'))
						);
			$tabl='users';
			$dataAdmin['USER_EMAIL'] = $this->input->post('email');
			if (!$this->Model_Kub->checkExist($tabl,$dataAdmin)) {
				if ($this->Model_Kub->enregAdmin($tabl,$data)) {

					$this->session->set_flashdata('message','Vous etes bien inscrit');
					redirect(base_url('login'));
				}
				else{
					$this->session->set_flashdata('message','une erreur s\'est produite lors de l\'enregistrement');
					redirect(base_url('login/signup'));
			}
			}
			else{
				$this->session->set_flashdata('message','Cette adresse electronique est deja occupee!!! Desole');
				redirect(base_url('login/signup'));
			}


		}
		elseif (empty($this->input->post('role')) && $this->input->post('role') !=1) {
			echo "t'es visiteur simple";
		}





			
		}
		else{
			ridirect(base_url('login/signup'));
		}
	}

	public function forgotMdp(){
		echo "MDP oublie";
	}
	public function deconnexion()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
		die();
	}

	public function __construct(){
		parent::__construct();
		/*if() {
 		redirect(base_url('Dashboard/Dashboard'));
 		}*/
	}

}

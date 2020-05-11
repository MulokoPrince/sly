<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends MY_Controller {
	

	private	$css = array('bootstrap','mdb','stylet','css/all','homestyle','main.style');
	private	$js = array('jquery-3.4.1.min','bootstrap','mdb.min','popper.min','myApp.js');

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('assets');
		$this->load->library('layout');
		$this->load->library('form_validation');
	}
	public function index(){
		$this->login();
	}
	public function login()
	{
		// |++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++|
		// |         start formulaire										      |

		$email = array('name'=>'email','placeholder'=>'exemple@yourmail.com', 'class' =>'form-control','id'=>'email');
		$pass = array('name'=>'pass','placeholder'=>'mot de passe', 'class' => 'form-control','id'=>'pass');
		$stay_connect = array('name'=>'stay_connect', 'class' => 'form-check-input','id'=>'stay_connect', 'value'=>'accept');

		$form = array('email'=>$email,'pass'=>$pass,'stay_connect' => $stay_connect);

		// |		  end formulaire												|
		// |++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++|

		$this->layout->put_assets($this->css,$this->js);
		$this->layout->set_theme('reg_theme');
		$this->layout->view('registration/login',$form);
		
	}
	public function signup()
	{
	// |++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++|
	// |         start formulaire										      |

		// $attribut =array('');
		// $hidden = array('');
		
		$input_class = 'form-control form-control-sm';

		$nom = array('name'=>'nom','placeholder'=>'nom', 'class' => $input_class,'id'=>'nom');
		$nom_famille = array('name'=>'nom_famille','placeholder'=>'nom de famille', 'class' => $input_class,'id'=>'nom_famille');
		$email = array('name'=>'email','placeholder'=>'e-mail', 'class' => $input_class,'id'=>'email');

		$sex_m = array('name'=>'sex','checked'=>TRUE,'value'=>'M','class'=>'form-check-input','id'=>'M');
		$sex_f = array('name'=>'sex','value'=>'F','class'=>'form-check-input','id'=>'F');

		$pays = array('name'=>'pays','placeholder'=>'votre pays', 'class' => $input_class,'id'=>'pays');
		$ville =array('name'=>'ville','placeholder'=>'votre ville', 'class' => $input_class,'id'=>'ville');
		$numero = array('name'=>'numero','placeholder'=>'numero de telephone', 'class' => $input_class,'id'=>'numero');

		$pass = array('name'=>'pass','placeholder'=>'mot de passe', 'class' => $input_class,'id'=>'pass');
		$confirm_pass = array('name'=>'confitm_pass','placeholder'=>'confitmer le mot de passe', 'class' => $input_class,'id'=>'confitm_pass');

		$submit = array('type'=>'submit','class' => 'btn btn-md btn-success white-text  col-12 m-0','content'=>"s'inscrire");


		$form = array('nom' => $nom, 'nom_famille' => $nom_famille, 'email' => $email, 'sex_m' => $sex_m, 'sex_f' => $sex_f, 'pays' => $pays, 'ville' => $ville, 'numero' => $numero, 'pass' =>$pass, 'confirm_pass' => $confirm_pass, 'submit' =>$submit);

	// |		  end formulaire												|
	// |++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++|		



			$this->layout->put_assets($this->css,$this->js);
			$this->layout->set_theme('reg_theme');
			$this->layout->view('registration/signup',$form);
		
		
	}


	// processus d'enregistrement de l'utilisateur 
	// Table --> client
	public function get_signed()
	{
		$nom = $this->input->post('nom');
		$pass = $this->input->post('pass');

		$nom_famille = $this->input->post('nom_famille');
		$email = $this->input->post('email');

		$sex_m =$this->input->post('sex_m');
		$sex_f = $this->input->post('sex_f');

		$pays = $this->input->post('pays');
		$ville =$this->input->post('ville');
		$numero = $this->input->post('numero');

		$pass =$this->input->post('pass');
		$confirm_pass = $this->input->post('confirm_pass');

		$this->form_validation->set_rules('nom', 'Nom', 'trim|required');
		$this->form_validation->set_rules('email','"E-mail"', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('pays','"Pays"', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('ville','"Ville"', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('numero','"numero de telephone"', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('numero','"numero de telephone"', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('pass','"Mot de passe"', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('confirm_pass','"confirmation de mot de passe"', 'trim|required|min_length[5]');

		if ($this->form_validation->run()) {
			$this->layout->put_assets($this->css,$this->js);
			$this->layout->set_theme('reg_theme');
			$this->login();
		}else{
			$this->layout->put_assets($this->css,$this->js);
			$this->layout->set_theme('reg_theme');
			$this->signup();
		}
	}
}

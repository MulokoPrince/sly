<?php 

class Model_Kub extends CI_Model {

	public function getRoles($tbl){
		$roles = $this->db->where(['IS_ACTIF'=>'1'])
							->get($tbl);

		if ($roles->num_rows()>0) {
			return $roles->result();
		}
	}

#binanishinda apa
	/*public function getCode(){
		$code = $this->db->where([''])
				->from('tbl_depart')
				->get();
		return $code->row();
			
		}
*/


	public function enregAdmin($table,$data){
		return $this->db->insert($table,$data);
	}


	public function checkAdmin($tbl,$array){
		$checkOneAdm = $this->db->where($array)
								->get($tbl);
				if($checkOneAdm->num_rows()>0){
					return $checkOneAdm->num_rows();
				}
	}

	public function checkExist($table,$array){
		$check = $this->db->where($array)
							->get($table);

			if ($check->num_rows()==1) {
				return $check->row();
			}

	}

	

	public function verify($tbl,$array= array()){
		$mdp = $this->db->where('USER_ID')
					->get($tbl);

		if ($mdp->num_rows()==1) {
			return $mdp->result();
		}
		
				
			
	}

	public function existAd($user,$mdp){
	
		$verify_data = $this->db->where(['USER_EMAIL'=>$user,'USER_MDP'=>$mdp])
					->get('users');

				if ($verify_data->num_rows()>0) {

					return $verify_data->row();
				}

	}

    public  function  addStudent($table,$data = array()) {
		return $this->db->insert($table,$data);
	}

}



 ?>

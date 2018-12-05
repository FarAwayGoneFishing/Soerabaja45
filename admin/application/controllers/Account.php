<?php
class Account extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Account_Model');
		$this->model = $this->Account_Model;
		if(isset($_SESSION['user'])){
			
		}else{
			redirect('Login');}
	}
	
 	public function index(){	
			$id = $_SESSION['user'];
			$data = array('data' => $this->model->data($id));
  			$this->load->view('Account', $data);
 	}
	
	public function save(){
	if(isset($_POST['btnSubmit'])){
			$this->model->id_admin = $_SESSION['user'];
			$this->model->nama_user = $_POST['nama'];
			$this->model->email = $_POST['email'];
			$this->model->no_telp = $_POST['telpon'];
			$this->model->update();
			redirect('Account');
		}
	}
	
	public function gantiPassword(){
		if(isset($_POST['btnSubmit'])){
			$this->model->password = $this->input->post('passnow');
			$this->model->id_admin = $_SESSION['user'];
			if($this->model->check_pass()==TRUE){
				if($this->input->post('passnew') == $this->input->post('repass')){
					$this->model->password_new = $this->input->post('passnew');
					$this->model->update_pass();
					redirect('Account');
				}
				else{
					$this->model->notif = "Password yang dimasukan tidak sama !!!";
					$this->load->view('CPass', ['model'=>$this->model]);
				
				}
			}
			else{
				$this->model->notif = "Password Salah !!!";
				$this->load->view('CPass', ['model'=>$this->model]);
				
			}
			
		}
		else{
  			$this->load->view('CPass', ['model'=>$this->model]);
		}	
 	}

}

?>
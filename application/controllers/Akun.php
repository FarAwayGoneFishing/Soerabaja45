<?php
class Akun extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Akun_Model');
		$this->model = $this->Akun_Model;
		if(isset($_SESSION['id_user'])){
			
		}else{
			redirect('Login');}
	}
	
 	public function index(){	
			$id = $_SESSION['id_user'];
			$data = array('data' => $this->model->data($id));
  			$this->load->view('Akun', $data);
 	}
	
	public function save(){
	if(isset($_POST['btnSubmit'])){
			$this->model->id_user = $_SESSION['id_user'];
			$this->model->nama_user = $_POST['nama'];
			$this->model->username = $_POST['username'];
			$this->model->no_telp = $_POST['telpon'];
			$this->model->alamat = $_POST['alamat'];
			$this->model->update();
			redirect('Akun');
		}
	}
	
	public function gantiPassword(){
		if(isset($_POST['btnSubmit'])){
			$this->model->password = $this->input->post('passnow');
			$this->model->id_user = $_SESSION['id_user'];
			if($this->model->check_pass()==TRUE){
				if($this->input->post('passnew') == $this->input->post('repass')){
					$this->model->password_new = $this->input->post('passnew');
					$this->model->update_pass();
					redirect('Akun');
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
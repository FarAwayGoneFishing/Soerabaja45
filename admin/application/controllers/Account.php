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
		if(isset($_POST['btnSubmit'])){
			$this->model->id_admin = $_POST['id_admin'];
			$this->model->nama_user = $_POST['nama_user'];
			$this->model->email = $_POST['email'];
			$this->model->no_telp = $_POST['no_telp'];
			$this->model->update();
			redirect('Account');
		}else {
			$id = $_SESSION['user'];
			$data = array('data' => $this->model->data($id));
  			$this->load->view('Account', $data);
		}
 	}

}

?>
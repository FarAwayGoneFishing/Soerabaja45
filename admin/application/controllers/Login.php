<?php
class Login extends CI_Controller {
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_Model');
		$this->model = $this->Login_Model;
		$this->load->library('session');
		$this->load->helper('url');
	}

 	public function index(){
		if(isset($_POST['btn_log'])){
			$this->model->username = $_POST['txt_username'];
			$this->model->password = $_POST['txt_password'];
			if ($this->model->cek_log()==TRUE) {
				$this->session->set_userdata('user', $this->model->id_user);
				$this->session->set_userdata('nama', $this->model->nama_lengkap);
				redirect('Dashboard');
			}
			else{
				$this->model->notif = "Username dan Password Salah !!!";
				$this->load->view('login', ['model'=>$this->model]);
				
			}
		}else{
			$this->load->view('login', ['model'=>$this->model]);
		}
	}

	public function logout(){
		if ($this->session->has_userdata('user')) {
			$this->session->sess_destroy();
			redirect('Login');
		}
	}
}
?>
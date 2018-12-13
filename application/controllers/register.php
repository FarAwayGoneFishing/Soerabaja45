<?php
class register extends CI_Controller {
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('Register_Model');
		$this->model = $this->Register_Model;
		$this->load->library('session');
		$this->load->helper(array('url'));
	}

 	function index(){
		if(isset($_POST['btnSubmit'])){
			if($this->input->post('password') == $this->input->post('repassword')){
				$data = $this->model->input(array(
				'id_user' => $this->model->get_id(),
				'nama_user' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'no_telp' => $this->input->post('hp'),
				'alamat' => $this->input->post('alamat'),
				'password' => $this->input->post('password')
				));
				redirect('login');
			}
			else{
				$this->model->notif = "Password yang dimasukan tidak sama !!!";
				$this->load->view('register', ['model'=>$this->model]);
				
			}
	} else{
		$this->load->view('register', ['model'=>$this->model]);
	}
	}
}

?>
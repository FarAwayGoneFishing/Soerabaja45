<?php
class register extends CI_Controller {
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('Register_Model');
		$this->model = $this->Register_Model;
		$this->load->library('session');
		$this->load->helper('url');
	}

 	function index(){
		if(isset($_POST['btnSubmit'])){
			$data = $this->model->input(array(
			'nama' => $this->input->post('nama'),
			'no.telp' => $this->input->post('hp'),
			'alamat' => $this->input->post('alamat'),
			'password' => $this->input->post('password')
	));
			redirect('login');
		} else{
		$this->load->view('register');
	}
	}
}

?>
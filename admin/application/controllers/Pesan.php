<?php
class Pesan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Pesan_Model');
		$this->model = $this->Pesan_Model;
	}
 	public function index(){
		$id = NULL;
		$data = array('data' => $this->model->data($id));
  		$this->load->view('Pesan', Data);
 	}

}

?>
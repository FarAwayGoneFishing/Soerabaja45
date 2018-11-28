<?php
class Offset extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Offset_Model');
		$this->model = $this->Offset_Model;
	}
 	public function index(){
		$data = array('data' => $this->model->data());
  		$this->load->view('Offset', $data);
 	}
	
	public function detail($id){
		$data = array('data' => $this->model->detail($id));
  		$this->load->view('DetailOffset', $data);
 	}

}

?>
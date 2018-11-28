<?php
class Digoffset extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Digoffset_Model');
		$this->model = $this->Digoffset_Model;
	}
 	public function index(){
		$data = array('data' => $this->model->data());
  		$this->load->view('Digoffset', $data);
 	}
	
	public function detail($id){
		$data = array('data' => $this->model->detail($id));
  		$this->load->view('DetailDigoffset', $data);
 	}

}

?>
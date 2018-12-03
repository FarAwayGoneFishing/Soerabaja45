<?php
class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Dashboard_Model');
		$this->model = $this->Dashboard_Model;
		if(isset($_SESSION['user'])){
			
		}else{
			redirect('Login');}
	}
	
	
 	public function index(){
		$data = array('data' => $this->model->data());
  		$this->load->view('Dashboard', $data);
 	}
	public function digoffset(){
		$data = array('data' => $this->model->data_digoffset());
  		$this->load->view('Dashboard2', $data);
 	}
	public function offset(){
		$data = array('data' => $this->model->data_offset());
  		$this->load->view('Dashboard3', $data);
 	}
		public function riwayat(){
		$data = array('data' => $this->model->data_riwayat());
  		$this->load->view('Riwayat', $data);
 	}
	
	
	public function Detail(){
		$id = $this->uri->segment(4);
		$data = array('data' => $this->model->detail($id));
  		$this->load->view('Detail', $data);
 	}
	public function Verifikasi(){
		$data = array('data' => $this->model->detail());
  		$this->load->view('Detail');
 	}

}

?>
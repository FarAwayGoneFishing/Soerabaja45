<?php
class Riwayat extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Riwayat_Model');
		$this->model = $this->Riwayat_Model;
		if(isset($_SESSION['id_user'])){
			
		}else{
			redirect('Login');}
	}
 	public function index(){
 		$id = $_SESSION['id_user'];
		$data = array('data' => $this->model->data($id));
  		$this->load->view('Riwayat', $data);
 	}
	
	public function bukti($id){
		$id = $id;
		$this->load->view('BuktiRiwayat', $id);
	}
	
	public function detail($id){
		$data = array('data' => $this->model->detail($id));
  		$this->load->view('DetailRiwayat', $data);
 	}
	
	public function delete($id){
		$this->model->delete($id);
		redirect('Riwayat');
	}

	public function delete_riwayat($id){
		$this->model->update($id);
		redirect('Riwayat');
	}

}

?>
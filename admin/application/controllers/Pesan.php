<?php
class Pesan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Pesan_Model');
		$this->model = $this->Pesan_Model;
		if(isset($_SESSION['user'])){
			
		}else{
			redirect('Login');}
	}
 	public function index(){
		$id = "admin";
		$data = array('data' => $this->model->data($id));
  		$this->load->view('Pesan', $data);
 	}
	
	public function detail($id){
		$data = array('data' => $this->model->detail($id));
  		$this->load->view('DetailPesan', $data);
	}
	
	public function balas($id){
		$kepada = $this->model->get_user($id);
		if(isset($_POST['btnSubmit'])){
			$data = $this->model->input(array(
			'nama' => $_SESSION['nama'],
			'telpon' => $_SESSION['telpon'],
			'kepada' => $kepada,
			'isi' => $this->input->post('isi')
	));
			redirect("Pesan/detail/$id");
		}
	}
	
	public function delete($id){
		$this->model->delete($id);
		redirect('Pesan');
	}
}

?>
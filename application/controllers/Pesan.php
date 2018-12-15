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
		$id = $_SESSION['nama_user'];
		$data = array('data' => $this->model->data_pesan($id));
  		$this->load->view('Pesan', $data);
 	}
	
	
	public function balas($id){
		$kepada = $this->model->get_user($id);
		if(isset($_POST['btnSubmit'])){
			$data = $this->model->input(array(
			'nama' => $_SESSION['nama'],
			'telpon' => $_SESSION['telpon'],
			'kepada' => "admin",
			'isi' => $this->input->post('isi')
	));
			redirect("Akun/detail/$id");
		}
	}
	
	public function delete($id){
		$this->model->delete($id);
		redirect('Akun/pesan');
	}

}

?>
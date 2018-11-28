<?php
class kontak extends CI_Controller {

 public function index(){
  $this->load->view('kontak');
 }
	public function pesan(){
	if(isset($_POST['btnSubmit'])){
		$this->model->username = $_POST['nama'];
		$this->model->password = $_POST['telpon'];
		$this->model->password = $_POST['isi'];
		$this->model->input();
		redirect('kontak');
		
	} else{
		$this->load->view('register');
	}
	}
}

?>
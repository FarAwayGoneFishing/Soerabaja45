<?php
class pembayaran extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
//		$this->load->model('Akun_Model');
//		$this->model = $this->Akun_Model;
		if(isset($_SESSION['id_user'])){
			
		}else{
			redirect('Login');}
	}

 public function index(){
  $this->load->view('pembayaran');
 }

}

?>
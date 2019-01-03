<?php
class pembayaran extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Pembayaran_Model');
		$this->model = $this->Pembayaran_Model;
		if(isset($_SESSION['id_user'])){
			
		}else{
			redirect('Login');}
	}

 public function produk($id){
	 $data = array(
	 	'model' => $this->model->data($id),
	 	
	 );
  $this->load->view('pembayaran', $data);
 }
	
	public function jasa_desain($id){
		$data = array('model' => $this->model->data($id));
  		$this->load->view('jasa_edit',$data);
 	}
	
	public function harga_produk($id_produk){
		$data_kertas=$this->model->data_kertas_get($_GET['kertas'], $_GET['ukuran']);
		$harga = $this->db->query("SELECT * FROM tb_produk LEFT JOIN tb_harga ON tb_produk.id_produk=tb_harga.id_produk LEFT JOIN tb_kertas ON tb_harga.id_kertas=tb_kertas.id_kertas WHERE tb_produk.id_produk='$id_produk' and tb_kertas.id_kertas='$data_kertas->id_kertas' and tb_harga.jumlah='$_GET[jumlah]'")->row();
		$data = array('harga'=>  $harga->harga);
		 echo json_encode($data);
 	}
	
	public function create(){
		$harga = $this->model->get_harga($_POST['model'], $_POST['jumlah'], $_POST['kertas'], $_POST['ukuran']);
		if(isset($_POST['pesan'])){
			$data = $this->model->input(array (
			'id_pesan' => $this->model->get_id(),	
			
			'deskripsi' => $this->input->post('deskripsi'),
			'id_harga' => $harga->id_harga,
			'link' => $this->input->post('link'),
			'jasa_desain' =>"TIDAK",
			'jumlah_pesan' => $this->input->post('jumlah'),
			'estimasi' => $this->input->post('estimasi'),
			'total_harga' => $this->input->post('harga'),
			'id_user' => $_SESSION['id_user'],
			));
			redirect('HubNo');
		}
	}

}

?>
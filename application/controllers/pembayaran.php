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
	 $data = array('model' => $this->model->data($id));
  $this->load->view('pembayaran', $data);
 }
	
	public function jasa_desain($id){
		$data = array('model' => $this->model->data($id));
  		$this->load->view('jasa_edit',$data);
 	}
	
	public function harga(){
		$harga = $this->db->query("SELECT * FROM tb_produk JOIN tb_harga JOIN produk JOIN tb_kertas WHERE produk.id_master = tb_produk.id_master AND tb_produk.id_produk = tb_harga.id_produk AND tb_harga.id_kertas = tb_kertas.id_kertas AND nama_produk = '$_POST[model]' AND tb_kertas.kertas = '$_POST[kertas]' AND tb_kertas.ukuran = '$_POST[ukuran]' AND tb_harga.jumlah = '$_POST[jumlah]'");
		$data = array('harga'=>  $karyawan['nama_karyawan'],							);
		 echo json_encode($data_karyawan);
 	}
	
	public function create(){
		if(isset($_POST['pesan'])){
			$data = $this->Model_Siswaguru->input(array (
			'model' => $this->input->post('model'),
			'deskripsi' => $this->input->post('deskripsi'),
			
			'link' => $this->input->post('link'),
			
			'jumlah_pesan' => $this->input->post('jumlah'),
			'estimasi' => $this->input->post('estimasi'),
			'total_harga' => $this->input->post('harga'),
			'id_user' => $_SESSION['id_user'],
			)
			redirect('mapel');
		}
	}

}

?>
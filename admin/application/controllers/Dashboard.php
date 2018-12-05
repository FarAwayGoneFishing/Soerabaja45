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
		if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                $filter = $_GET['filter']; // Ambil data filder yang dipilih user
                if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                    $tgl = $_GET['tanggal'];
                    
                    $transaksi = $this->model->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel

                }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                    $bulan = $_GET['bulan'];
                    $tahun = $_GET['tahun'];
                    $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                    
                    $transaksi = $this->model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel

                }else{ // Jika filter nya 3 (per tahun)
                    $tahun = $_GET['tahun'];
                    
                    $transaksi = $this->model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
                }
                
        }else{ // Jika user tidak mengklik tombol tampilkan
            $transaksi = $this->model->data_riwayat();
            // Panggil fungsi view_all yang ada di TransaksiModel
        }
			
		$data['option_tahun'] = $this->model->option_tahun();
		$data['row'] = $this->model->data_riwayat();
  		$this->load->view('Riwayat', $data);
 	}
	
	
	public function Detail($id){
		$data = array('data' => $this->model->detail($id));
  		$this->load->view('DetailPesanan', $data);
 	}
	public function Verifikasi(){
		$data = array('data' => $this->model->bayar());
  		$this->load->view('Dashboard');
 	}
	
	public function bayar($id){
			$this->model->status = "lunas";
			$this->model->bayar($id);
			redirect('Dashboard');
 	}
	
	public function selesai($id){
			$this->model->status = "Selesai";
			$this->model->selesai($id);
			redirect('Dashboard');
 	}
	
	public function delete($id){
		$this->model->delete($id);
		redirect('Dashboard');
 	}

}

?>
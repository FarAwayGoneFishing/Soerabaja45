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
	public function checker(){
		return $this->model->checker();
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
	
	public function fetch(){
		if(isset($_POST["view"]))
			{
			 if($_POST["view"] != '')
			 {
				$lala = $_POST["view"];
			  $update_query = $this->db->query("UPDATE tb_pemesanan SET view = '1' WHERE id_pesan = '$lala'");
			  
			 }
			 $query = $this->model->data();
			 $output = '';
			$no = 1;
			  foreach($query as $row)
			  {
				 
				$tombol = '';
				if($row->status_bayar == "belum"){ $tombol = '
						<td class="text-right"><a class="btn btn-danger" href="'.base_url().'Dashboard/bayar/'.$row->id_pesan.'" role="button">Bayar</a></td>'
					;}else{ $tombol = '
						<td class="text-right"><a class="btn btn-success" href="'.base_url().'Dashboard/selesai/'.$row->id_pesan.'" role="button">Selesai</a></td>'
					;};
				$detail_tombol = '';
				  if($row->view == "0"){ $detail_tombol ='
						<td class="text-right"><a class="btn btn-success" href="'.base_url().'Dashboard/Detail/'.$row->id_pesan.'" id="detail" role="button">Detail</a></td>'
					;} else { $detail_tombol ='
						<td class="text-right"><a class="btn btn-primary" href="'.base_url().'Dashboard/Detail/'.$row->id_pesan.'" id="detail" role="button">Detail</a></td>'
					;};		
			   $output .= '
			   <tr>
                   	<td>'.$no.'</td>
					<td>'.$row->nama_user.'</td>
					<input id="id_pesan" style="display : none" value="'.$row->id_pesan.'">
					<td>'.$row->nama_produk.'</td>
					<td class="text-right">'.$row->jumlah_pesan.'</td>
					<td class="text-right">'.$row->total_harga.'</td>
					'.$detail_tombol.'								
					'.$tombol.'
         		</tr>
			   ';
				$no = $no+1;
			  }
			 
			$query1 = $this->db->query("SELECT COUNT(*) AS count FROM tb_pemesanan WHERE view = 0 AND status_bayar != 'Selesai'");
			 $row = $query1->row_array();
			 $count = $row['count'];
			
			$query2 = $this->db->query("SELECT COUNT(*) AS count1 FROM tb_pemesanan JOIN tb_harga WHERE view = 0 AND tb_pemesanan.id_harga = tb_harga.id_harga AND jenis_produk = 'Digital Offset' AND status_bayar != 'Selesai' ");
			 $row1 = $query2->row_array();
			 $count1 = $row1['count1'];
			
			$query3 = $this->db->query("SELECT COUNT(*) AS count2 FROM tb_pemesanan JOIN tb_harga WHERE view = 0 AND tb_pemesanan.id_harga = tb_harga.id_harga AND jenis_produk = 'Offset' AND status_bayar != 'Selesai'");
			 $row2 = $query3->row_array();
			 $count2 = $row2['count2'];
			
			 $data = array(
			  	'notification'   => $output,
			  	'unseen_notification' => $count,
				'unseen_notification1' => $count1,
				'unseen_notification2' => $count2
			 );
			 echo json_encode($data);
			}
	}
	
	public function fetch1(){
		if(isset($_POST["view"]))
			{
			 if($_POST["view"] != '')
			 {
			  $update_query = "UPDATE comments SET comment_status=1 WHERE comment_status=0";
			  mysqli_query($connect, $update_query);
			 }
			 $query = $this->model->data_digoffset();
			 $output = '';
			$no = 1; 
			  foreach($query as $row)
			  {
				
				$tombol = '';
				if($row->status_bayar == "belum"){ $tombol = '
						<td class="text-right"><a class="btn btn-danger" href="'.base_url().'Dashboard/bayar/'.$row->id_pesan.'" role="button">Bayar</a></td>'
					;}else{ $tombol = '
						<td class="text-right"><a class="btn btn-success" href="'.base_url().'Dashboard/selesai/'.$row->id_pesan.'" role="button">Selesai</a></td>'
					;};
			  $detail_tombol = '';
				  if($row->view == "0"){ $detail_tombol ='
						<td class="text-right"><a class="btn btn-success" href="'.base_url().'Dashboard/Detail/'.$row->id_pesan.'" id="detail" role="button">Detail</a></td>'
					;} else { $detail_tombol ='
						<td class="text-right"><a class="btn btn-primary" href="'.base_url().'Dashboard/Detail/'.$row->id_pesan.'" id="detail" role="button">Detail</a></td>'
					;};		
			   $output .= '
			   <tr>
                   	<td>'.$no.'</td>
					<td>'.$row->nama_user.'</td>
					<td>'.$row->nama_produk.'</td>
					<td class="text-right">'.$row->jumlah_pesan.'</td>
					<td class="text-right">'.$row->total_harga.'</td>
					'.$detail_tombol.'									
					'.$tombol.'
         		</tr>
			   ';
				$no = $no+1;
			  }
			 
			 $query1 = $this->db->query("SELECT COUNT(*) AS count FROM tb_pemesanan WHERE view = 0 AND status_bayar != 'Selesai'");
			 $row = $query1->row_array();
			 $count = $row['count'];
			
			$query2 = $this->db->query("SELECT COUNT(*) AS count1 FROM tb_pemesanan JOIN tb_harga WHERE view = 0 AND tb_pemesanan.id_harga = tb_harga.id_harga AND jenis_produk = 'Digital Offset' AND status_bayar != 'Selesai' ");
			 $row1 = $query2->row_array();
			 $count1 = $row1['count1'];
			
			$query3 = $this->db->query("SELECT COUNT(*) AS count2 FROM tb_pemesanan JOIN tb_harga WHERE view = 0 AND tb_pemesanan.id_harga = tb_harga.id_harga AND jenis_produk = 'Offset' AND status_bayar != 'Selesai'");
			 $row2 = $query3->row_array();
			 $count2 = $row2['count2'];
			
			 $data = array(
			  	'notification'   => $output,
			  	'unseen_notification' => $count,
				'unseen_notification1' => $count1,
				'unseen_notification2' => $count2
			 );
			 echo json_encode($data);
			}
	}
	
	public function fetch2(){
		if(isset($_POST["view"]))
			{
			 if($_POST["view"] != '')
			 {
			  $update_query = "UPDATE comments SET comment_status=1 WHERE comment_status=0";
			  mysqli_query($connect, $update_query);
			 }
			 $query = $this->model->data_offset();
			 $output = '';
			$no = 1;
			  foreach($query as $row)
			  {
				 
				$tombol = '';
				if($row->status_bayar == "belum"){ $tombol = '
						<td class="text-right"><a class="btn btn-danger" href="'.base_url().'Dashboard/bayar/'.$row->id_pesan.'" role="button">Bayar</a></td>'
					;}else{ $tombol = '
						<td class="text-right"><a class="btn btn-success" href="'.base_url().'Dashboard/selesai/'.$row->id_pesan.'" role="button">Selesai</a></td>'
					;};
			  $detail_tombol = '';
				  if($row->view == "0"){ $detail_tombol ='
						<td class="text-right"><a class="btn btn-success" href="'.base_url().'Dashboard/Detail/'.$row->id_pesan.'" id="detail" role="button">Detail</a></td>'
					;} else { $detail_tombol ='
						<td class="text-right"><a class="btn btn-primary" href="'.base_url().'Dashboard/Detail/'.$row->id_pesan.'" id="detail" role="button">Detail</a></td>'
					;};		
			   $output .= '
			   <tr>
                   	<td>'.$no.'</td>
					<td>'.$row->nama_user.'</td>
					<td>'.$row->nama_produk.'</td>
					<td class="text-right">'.$row->jumlah_pesan.'</td>
					<td class="text-right">'.$row->total_harga.'</td>
					'.$detail_tombol.'											
					'.$tombol.'
         		</tr>
			   ';
				$no = $no+1;
			  }
			 
			 $query1 = $this->db->query("SELECT COUNT(*) AS count FROM tb_pemesanan WHERE view = 0 AND status_bayar != 'Selesai'");
			 $row = $query1->row_array();
			 $count = $row['count'];
			
			$query2 = $this->db->query("SELECT COUNT(*) AS count1 FROM tb_pemesanan JOIN tb_harga WHERE view = 0 AND tb_pemesanan.id_harga = tb_harga.id_harga AND jenis_produk = 'Digital Offset' AND status_bayar != 'Selesai' ");
			 $row1 = $query2->row_array();
			 $count1 = $row1['count1'];
			
			$query3 = $this->db->query("SELECT COUNT(*) AS count2 FROM tb_pemesanan JOIN tb_harga WHERE view = 0 AND tb_pemesanan.id_harga = tb_harga.id_harga AND jenis_produk = 'Offset' AND status_bayar != 'Selesai'");
			 $row2 = $query3->row_array();
			 $count2 = $row2['count2'];
			
			 $data = array(
			  	'notification'   => $output,
			  	'unseen_notification' => $count,
				'unseen_notification1' => $count1,
				'unseen_notification2' => $count2
			 );
			 echo json_encode($data);
			}
	}
	
}

?>
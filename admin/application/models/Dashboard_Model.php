<?php
class Dashboard_Model extends CI_Model{
	public $status;

	public function data(){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk JOIN tb_kertas WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_produk.id_kertas = tb_kertas.id_kertas AND tb_pemesanan.status_bayar != 'Selesai' ");
		return $query->result();	
	}
	
	public function data_digoffset(){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk JOIN tb_kertas WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_produk.id_kertas = tb_kertas.id_kertas AND tb_produk.jenis_produk = 'Digital Offset' AND tb_pemesanan.status_bayar != 'Selesai' ");
		return $query->result();	
	}
	
	public function data_offset(){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk JOIN tb_kertas WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_produk.id_kertas = tb_kertas.id_kertas AND tb_produk.jenis_produk = 'Offset' AND tb_pemesanan.status_bayar != 'Selesai' ");
		return $query->result();	
	}
	
	public function data_riwayat(){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_pemesanan.status_bayar = 'Selesai' ");
		return $query->result();	
	}
	
	public function detail($id){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk JOIN tb_kertas WHERE tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_produk.id_kertas = tb_kertas.id_kertas AND tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_pesan = '$id' ");
		return $query->result();	
	}
	
	public function view_by_date($date){

		$this->db->select('*');
 		$this->db->from('tb_pemesanan');
 		$this->db->join('tb_user','tb_pemesanan.id_user = tb_user.id_user');
    	$this->db->join('tb_harga', 'tb_pemesanan.id_harga = tb_harga.id_harga');
		$this->db->join('tb_produk', 'tb_harga.id_produk = tb_produk.id_produk');
    	$this->db->group_by('tb_pemesanan.id_user');
		$this->db->where('tb_pemesanan.status_bayar', 'Selesai');
 		$this->db->where('DATE(tanggal)', $date);
    	$this->db->order_by('tb_pemesanan.tanggal', 'DESC');
 		$query = $this->db->get();
		return $query->result();
  }
    
  public function view_by_month($month, $year){
    	$this->db->select('*');
 		$this->db->from('tb_pemesanan');
 		$this->db->join('tb_user','tb_pemesanan.id_user = tb_user.id_user');
    	$this->db->join('tb_harga', 'tb_pemesanan.id_harga = tb_harga.id_harga');
		$this->db->join('tb_produk', 'tb_harga.id_produk = tb_produk.id_produk');
    	$this->db->group_by('tb_pemesanan.id_user');
	  	$this->db->where('tb_pemesanan.status_bayar', 'Selesai');
 		$this->db->where('MONTH(tanggal)', $month); // Tambahkan where bulan
    	$this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
    	$this->db->order_by('tb_pemesanan.tanggal', 'DESC');
 		$query = $this->db->get();
		return $query->result();
  }

  public function view_by_year($year){
    	$this->db->select('*');
 		$this->db->from('tb_pemesanan');
 		$this->db->join('tb_user','tb_pemesanan.id_user = tb_user.id_user');
    	$this->db->join('tb_harga', 'tb_pemesanan.id_harga = tb_harga.id_harga');
		$this->db->join('tb_produk', 'tb_harga.id_produk = tb_produk.id_produk');
    	$this->db->group_by('tb_pemesanan.id_user');
	  	$this->db->where('tb_pemesanan.status_bayar', 'Selesai');
 		$this->db->where('YEAR(tanggal)', $year);
    	$this->db->order_by('tb_pemesanan.tanggal', 'DESC');
 		$query = $this->db->get();
		return $query->result();
  }
   
    
    public function option_tahun(){
        $this->db->select('YEAR(tanggal) AS tahun'); // Ambil Tahun dari field tgl
        $this->db->from('tb_pemesanan'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tanggal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal)'); // Group berdasarkan tahun pada field tgl
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }
	
	public function bayar($id){
		$sql=sprintf("UPDATE tb_pemesanan SET status_bayar='%s' WHERE id_pesan='$id' ",
			$this->status);
	
		$this->db->query($sql);
	}
	
	public function selesai($id){
		$sql=sprintf("UPDATE tb_pemesanan SET status_bayar='%s' WHERE id_pesan='$id' ",
			$this->status);
	
		$this->db->query($sql);
	}
	
	public function delete($id){
		$sql=sprintf("DELETE FROM tb_pemesanan WHERE id_pesan='$id'");
		$this->db->query($sql);
	}
	
	public function jumlah(){
		$sql = sprintf("SELECT * FROM tb_pemesanan WHERE view = 0");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->num_rows();
	}

	
	function get_news(){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk JOIN tb_kertas WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_produk.id_kertas = tb_kertas.id_kertas AND tb_pemesanan.status_bayar != 'Selesai' ");
		return $query->result();	
	}

}
?>
<?php
class Dashboard_Model extends CI_Model{

	public function data(){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk ");
		return $query->result();	
	}
	
	public function data_digoffset(){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_produk.jenis_produk = 'Digital Offset' ");
		return $query->result();	
	}
	
	public function data_offset(){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_produk.jenis_produk = 'Offset' ");
		return $query->result();	
	}
	public function data_offset(){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_pemesanan.status_bayar = 'Selesai' ");
		return $query->result();	
	}

}
?>
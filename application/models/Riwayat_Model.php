<?php
class Riwayat_Model extends CI_Model{


	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function data($id){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk JOIN tb_kertas WHERE tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_harga.id_kertas = tb_kertas.id_kertas AND tb_pemesanan.id_user = '$id' Order by tanggal desc ");
		return $query->result();	
	}
	
	public function update($id){
		$sql=sprintf("UPDATE tb_pemesanan SET riwayat = '0' WHERE id_user= '$id' ");
	
	$this->db->query($sql);
	}
	
	public function detail($id){
		$query = $this->db->query("SELECT * FROM tb_pemesanan JOIN tb_user JOIN tb_harga JOIN tb_produk JOIN tb_kertas WHERE tb_pemesanan.id_harga = tb_harga.id_harga AND tb_harga.id_produk = tb_produk.id_produk AND tb_harga.id_kertas = tb_kertas.id_kertas AND tb_pemesanan.id_user = tb_user.id_user AND tb_pemesanan.id_pesan = '$id' ");
		return $query->result();	
	}	
	
	public function delete($id){
		$sql = sprintf("DELETE FROM tb_pemesanan WHERE id_pesan = '$id'");
		$this->db->query($sql);
	}
	
}
?>
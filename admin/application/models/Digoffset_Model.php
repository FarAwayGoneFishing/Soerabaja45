<?php
class Digoffset_Model extends CI_Model{

		public function data(){
		$query = $this->db->query("SELECT DISTINCT produk, tb_produk.id_master FROM produk JOIN tb_produk JOIN tb_harga WHERE tb_harga.jenis_produk = 'Digital Offset' AND produk.id_master = tb_produk.id_master AND tb_produk.id_produk = tb_harga.id_produk");
		return $query->result();	
	}
	
	
	public function detail($id){
		$query = $this->db->query("SELECT * FROM produk JOIN tb_produk JOIN tb_harga JOIN tb_kertas WHERE produk.id_master = tb_produk.id_master AND tb_produk.id_produk = tb_harga.id_produk AND tb_harga.id_kertas = tb_kertas.id_kertas AND produk.id_master = '$id'");
		return $query->result();	
	}
	
}
?>
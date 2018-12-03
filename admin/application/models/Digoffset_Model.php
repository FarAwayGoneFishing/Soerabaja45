<?php
class Digoffset_Model extends CI_Model{

	public function data(){
		$query = $this->db->query("SELECT * FROM tb_produk JOIN tb_kertas WHERE tb_produk.id_kertas = tb_kertas.id_kertas AND tb_produk.jenis_produk = 'Digital Offset' ");
		return $query->result();	
	}
	
	public function detail($id){
		$query = $this->db->query("SELECT * FROM tb_produk JOIN tb_kertas JOIN tb_harga WHERE tb_produk.id_kertas = tb_kertas.id_kertas AND tb_produk.id_produk = tb_harga.id_produk AND tb_produk.id_produk = '$id'");
		return $query->result();	
	}
	
}
?>
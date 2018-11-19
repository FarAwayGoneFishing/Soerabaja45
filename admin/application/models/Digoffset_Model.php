<?php
class Digoffset_Model extends CI_Model{

	public function data(){
		$query = $this->db->query("SELECT * FROM tb_produk JOIN tb_kertas WHERE tb_produk.id_kertas = tb_kertas.id_kertas AND tb_produk.jenis_produk = 'Digital Offset' ");
		return $query->result();	
	}
	
}
?>
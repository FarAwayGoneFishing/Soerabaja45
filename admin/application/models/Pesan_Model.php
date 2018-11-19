<?php
class Pesan_Model extends CI_Model{

	public function data($id){
		$query = $this->db->query("SELECT * FROM tb_pesan WHERE kepada = '$id' ");
		return $query->result();	
	}

}
?>
<?php
class Pesan_Model extends CI_Model{

	public function data($id){
		$query = $this->db->query("SELECT * FROM tb_pesan WHERE kepada = '$id'");
		return $query->result();	
	}
	
	public function detail($id){
		$query = $this->db->query("SELECT * FROM tb_pesan WHERE id_pesan = '$id'");
		return $query->result();	
	}
	
	public function input($data = array()){
		return $this->db->insert('tb_pesan',$data);
	}
	
	public function delete($id){
		$sql = sprintf("DELETE FROM tb_pesan WHERE id_pesan = '$id'");
		$this->db->query($sql);
	}
	
	function get_user($id){
		$query = $this->db->query("SELECT nama FROM tb_pesan WHERE id_pesan = '$id'");
		foreach ($query->result() as $data){
			$pipi = $data->nama;
		}
		return $pipi;
	}
}
?>
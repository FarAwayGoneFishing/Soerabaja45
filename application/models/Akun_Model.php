<?php
class Akun_Model extends CI_Model{
	public $id_user;
	public $nama_user;
	public $username;
	public $no_telp;
	public $alamat;
	public $password;
	public $password_new;
	public $notif = "";

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function data($id){
		$query = $this->db->query("SELECT * FROM tb_user WHERE id_user = '$id'");
		return $query->result();	
	}
	
	public function update(){
		$sql=sprintf("UPDATE tb_user SET nama_user='%s', username='%s', no_telp='%s', alamat = '%s' WHERE id_user='%s' ",
		$this->nama_user,
		$this->username,
		$this->no_telp,
		$this->alamat,
		$this->id_user);
	
	$this->db->query($sql);
	}
	
	public function check_pass(){
		$sql = sprintf("SELECT COUNT(*) AS username FROM tb_user WHERE id_user = '%s' AND password ='%s'",
			$this->id_user,
			$this->password);
			$query = $this->db->query($sql);
			$row = $query->row_array();
			return $row['username'] == 1;
	}
	
	public function update_pass(){
		$sql=sprintf("UPDATE tb_user SET password ='%s' WHERE id_user='%s' ",
		$this->password_new,
		$this->id_user);
	
	$this->db->query($sql);
	}
	
	public function data_pesan($id){
		$query = $this->db->query("SELECT * FROM tb_pesan WHERE id_pesan = '$id'");
		foreach ($query->result() as $data){
			$pipi = $data->nama;
		}
		$query1 = $this->db->query("SELECT * FROM tb_pesan WHERE nama = '$pipi' OR kepada = '$pipi'");
		return $query1->result();
	}
	
	public function input($data = array()){
		return $this->db->insert('tb_pesan',$data);
	}
	
	public function delete($id){
		$sql = sprintf("DELETE FROM tb_pesan WHERE id_pesan = '$id'");
		$this->db->query($sql);
	}
	
	function get_user($id){
		$query = $this->db->query("SELECT * FROM tb_pesan WHERE id_pesan = '$id'");
		foreach ($query->result() as $data){
			$pipi = $data->nama;
		}
		return $pipi;
	}
	
}
?>
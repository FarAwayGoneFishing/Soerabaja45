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
	
}
?>
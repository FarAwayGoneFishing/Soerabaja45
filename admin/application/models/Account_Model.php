<?php
class Account_Model extends CI_Model{
	public $id_admin;
	public $nama_user;
	public $email;
	public $no_telp;
	public $password;
	public $password_new;
	public $notif = "";

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function data($id){
		$query = $this->db->query("SELECT * FROM tb_admin WHERE id_admin = '$id'");
		return $query->result();	
	}
	
	public function update(){
		$sql=sprintf("UPDATE tb_admin SET nama_user='%s', email='%s', no_telp='%s' WHERE id_admin='%s' ",
		$this->nama_user,
		$this->email,
		$this->no_telp,
		$this->id_admin);
	
	$this->db->query($sql);
	}
	
	public function check_pass(){
		$sql = sprintf("SELECT COUNT(*) AS username FROM tb_admin WHERE id_admin = '%s' AND password ='%s'",
			$this->id_admin,
			$this->password);
			$query = $this->db->query($sql);
			$row = $query->row_array();
			return $row['username'] == 1;
	}
	
	public function update_pass(){
		$sql=sprintf("UPDATE tb_admin SET password ='%s' WHERE id_admin='%s' ",
		$this->password_new,
		$this->id_admin);
	
	$this->db->query($sql);
	}
	
}
?>
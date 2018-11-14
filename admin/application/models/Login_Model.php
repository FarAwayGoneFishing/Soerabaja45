<?php
class Login_Model extends CI_Model{
	public $email;
	public $password;
	public $id_admin;
	public $nama_user;
	public $notif = "";


	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function cek_log(){
		$sql = sprintf("SELECT COUNT(*) AS username FROM tb_admin WHERE email = '%s' AND password='%s'",
			$this->email,
			$this->password);
		$sql1 = sprintf("SELECT * FROM tb_admin WHERE email = '%s' AND password='%s'",
			$this->email,
			$this->password);
			$query = $this->db->query($sql);
			$query1 = $this->db->query($sql1);
			$row = $query->row_array();
			foreach ($query1->result() as $row1)
{
        	$this->nama_user = $row1->nama_user;
			$this->id_admin = $row1->id_admin;
}
			return $row['username'] == 1;
	}

}
?>
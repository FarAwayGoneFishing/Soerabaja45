<?php
class Login_Model extends CI_Model{
	public $username;
	public $password;
	public $id_user;
	public $nama;
	public $notif = "";


	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function cek_log(){
		$sql = sprintf("SELECT COUNT(*) AS username FROM tb_admin WHERE username = '%s' AND password='%s'",
			$this->username,
			$this->password);
		$sql1 = sprintf("SELECT * FROM tb_admin WHERE username = '%s' AND password='%s'",
			$this->username,
			$this->password);
			$query = $this->db->query($sql);
			$query1 = $this->db->query($sql1);
			$row = $query->row_array();
			foreach ($query1->result() as $row1)
{
        	$this->level = $row1->nama;
			$this->id_user = $row1->id_user;
}
			return $row['username'] == 1;
	}

}
?>
<?php
class Register_Model extends CI_Model{
	
	function input($data = array()){
		return $this->db->insert('tb_user',$data);
	}
}
?>
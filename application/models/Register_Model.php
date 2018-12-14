<?php

class Register_model extends CI_Model{
class Register_Model extends CI_Model{
	public $notif = "";
	
	function input($data = array()){
		return $this->db->insert('tb_user',$data);
	}
	
	function get_id(){
    $this->db->select('RIGHT(tb_user.id_user,4) as kode', FALSE);
    $this->db->order_by('id_user','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('tb_user');     
    if($query->num_rows() <> 0){      
  
     $data = $query->row();      
     $kode = intval($data->kode) + 1;    
    }
    else {      
     //jika kode belum ada      
     $kode = 1;    
    }
    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); 
    $kodejadi = "US".$kodemax;  
    return $kodejadi;
  }
}
?>
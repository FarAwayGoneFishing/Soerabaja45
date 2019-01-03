<?php

class Pembayaran_Model extends CI_Model{
	public $notif = "";
	
	function input($data = array()){
		return $this->db->insert('tb_pemesanan',$data);
	}
	
	function get_id(){
    $this->db->select('RIGHT(tb_pemesanan.id_user,4) as kode', FALSE);
    $this->db->order_by('id_pesan','DESC');    
    $this->db->limit(1);    
    $query = $this->db->get('tb_pemesanan');     
    if($query->num_rows() <> 0){      
  
     $data = $query->row();      
     $kode = intval($data->kode) + 1;    
    }
    else {      
     //jika kode belum ada      
     $kode = 1;    
    }
    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); 
    $kodejadi = "PS".$kodemax;  
    return $kodejadi;
  }
	
	function data($id){
		$query = $this->db->query("SELECT * FROM tb_produk WHERE id_master = '$id'");
		return $query->result();
	}
}
?>
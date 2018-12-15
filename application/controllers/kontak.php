<?php
class Kontak extends CI_Controller {
public function __construct(){
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('url');
          $this->load->model('Kontak_Model');
          $this->model = $this->Kontak_Model;
      }
      
       public function index(){
            $this->load->view('kontak');
       }
      
      public function pesan(){
          if(isset($_POST['btnSubmit'])){
              $data = $this->model->input(array(
              'nama' => $this->input->post('nama'),
              'telpon' => $this->input->post('telpon'),
              'kepada' => "admin",
              'isi' => $this->input->post('isi')
      ));
              redirect("Kontak");
          }
      }

}

?>